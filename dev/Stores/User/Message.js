import ko from 'ko';
import { koComputable } from 'External/ko';

import { Scope, Notification } from 'Common/Enums';
import { MessageSetAction } from 'Common/EnumsUser';
import { $htmlCL, elementById } from 'Common/Globals';
import { arrayLength, pInt, pString, addObservablesTo, addComputablesTo, addSubscribablesTo } from 'Common/Utils';

import {
	getFolderInboxName,
	addNewMessageCache,
	setFolderUidNext,
	getFolderFromCacheList,
	setFolderHash,
	MessageFlagsCache,
	addRequestedMessage,
	clearNewMessageCache
} from 'Common/Cache';

import { mailBox } from 'Common/Links';
import { i18n, getNotification } from 'Common/Translator';

import { EmailCollectionModel } from 'Model/EmailCollection';
import { MessageModel } from 'Model/Message';
import { MessageCollectionModel } from 'Model/MessageCollection';

import { AppUserStore } from 'Stores/User/App';
import { AccountUserStore } from 'Stores/User/Account';
import { FolderUserStore } from 'Stores/User/Folder';
import { SettingsUserStore } from 'Stores/User/Settings';
import { NotificationUserStore } from 'Stores/User/Notification';

//import Remote from 'Remote/User/Fetch'; Circular dependency

const
	isChecked = item => item.checked();

let MessageSeenTimer;

export const MessageUserStore = new class {
	constructor() {
		this.staticMessage = new MessageModel();

		this.list = ko.observableArray().extend({ debounce: 0 });

		addObservablesTo(this, {
			listCount: 0,
			listSearch: '',
			listThreadUid: 0,
			listPage: 1,
			listPageBeforeThread: 1,
			listError: '',

			listEndHash: '',
			listEndThreadUid: 0,

			listLoading: false,
			// Happens when message(s) removed from list
			listIsIncomplete: false,

			selectorMessageSelected: null,
			selectorMessageFocused: null,

			// message viewer
			message: null,
			messageViewTrigger: false,
			messageError: '',
			messageLoading: false,
			messageFullScreenMode: false,

			// Cache mail bodies
			messagesBodiesDom: null,
			messageActiveDom: null
		});

		this.listDisableAutoSelect = ko.observable(false).extend({ falseTimeout: 500 });

		// Computed Observables

		addComputablesTo(this, {
			listIsLoading: () => {
				const value = this.listLoading() | this.listIsIncomplete();
				$htmlCL.toggle('list-loading', value);
				return value;
			},

			listPageCount: () => Math.max(1, Math.ceil(this.listCount() / SettingsUserStore.messagesPerPage())),

			mainMessageListSearch: {
				read: this.listSearch,
				write: value => rl.route.setHash(
					mailBox(FolderUserStore.currentFolderFullNameHash(), 1, value.toString().trim(), this.listThreadUid())
				)
			},

			isMessageSelected: () => null !== this.message(),

			listCheckedOrSelected: () => {
				const
					selectedMessage = this.selectorMessageSelected(),
					focusedMessage = this.selectorMessageFocused(),
					checked = this.list.filter(item => isChecked(item) || item === selectedMessage);
				return checked.length ? checked : (focusedMessage ? [focusedMessage] : []);
			},

			listCheckedOrSelectedUidsWithSubMails: () => {
				let result = [];
				this.listCheckedOrSelected().forEach(message => {
					result.push(message.uid);
					if (1 < message.threadsLen()) {
						result = result.concat(message.threads()).unique();
					}
				});
				return result;
			}
		});

		this.listChecked = koComputable(() => this.list.filter(isChecked))
			.extend({ rateLimit: 0 });

		this.hasCheckedMessages = koComputable(() => !!this.list.find(isChecked))
			.extend({ rateLimit: 0 });

		this.hasCheckedOrSelected = koComputable(() => !!(this.selectorMessageSelected()
				|| this.selectorMessageFocused()
				|| this.list.find(item => item.checked())))
			.extend({ rateLimit: 50 });

		// Subscribers

		addSubscribablesTo(this, {
			message: message => {
				clearTimeout(MessageSeenTimer);
				if (message) {
					if (!SettingsUserStore.usePreviewPane()) {
						AppUserStore.focusedState(Scope.MessageView);
					}
				} else {
					AppUserStore.focusedState(Scope.MessageList);

					this.messageFullScreenMode(false);
					this.hideMessageBodies();
				}
			},

			isMessageSelected: value => elementById('rl-right').classList.toggle('message-selected', value)
		});

		this.purgeMessageBodyCache = this.purgeMessageBodyCache.throttle(30000);
	}

	purgeMessageBodyCache() {
		const messagesDom = this.messagesBodiesDom(),
			children = messagesDom && messagesDom.children;
		if (children) {
			while (15 < children.length) {
				children[0].remove();
			}
		}
	}

	initUidNextAndNewMessages(folder, uidNext, newMessages) {
		if (getFolderInboxName() === folder && uidNext) {
			if (arrayLength(newMessages)) {
				newMessages.forEach(item => addNewMessageCache(folder, item.Uid));

				NotificationUserStore.playSoundNotification();

				const len = newMessages.length;
				if (3 < len) {
					NotificationUserStore.displayDesktopNotification(
						AccountUserStore.email(),
						i18n('MESSAGE_LIST/NEW_MESSAGE_NOTIFICATION', {
							COUNT: len
						}),
						{ Url: mailBox(newMessages[0].Folder) }
					);
				} else {
					newMessages.forEach(item => {
						NotificationUserStore.displayDesktopNotification(
							EmailCollectionModel.reviveFromJson(item.From).toString(),
							item.Subject,
							{ Folder: item.Folder, Uid: item.Uid }
						);
					});
				}
			}

			setFolderUidNext(folder, uidNext);
		}
	}

	hideMessageBodies() {
		const messagesDom = this.messagesBodiesDom();
		messagesDom && Array.from(messagesDom.children).forEach(el => el.hidden = true);
	}

	/**
	 * @param {string} fromFolderFullName
	 * @param {Array} uidForRemove
	 * @param {string=} toFolderFullName = ''
	 * @param {boolean=} copy = false
	 */
	removeMessagesFromList(fromFolderFullName, uidForRemove, toFolderFullName = '', copy = false) {
		uidForRemove = uidForRemove.map(mValue => pInt(mValue));

		let unseenCount = 0,
			messageList = this.list,
			currentMessage = this.message();

		const trashFolder = FolderUserStore.trashFolder(),
			spamFolder = FolderUserStore.spamFolder(),
			fromFolder = getFolderFromCacheList(fromFolderFullName),
			toFolder = toFolderFullName ? getFolderFromCacheList(toFolderFullName) : null,
			messages =
				FolderUserStore.currentFolderFullName() === fromFolderFullName
					? messageList.filter(item => item && uidForRemove.includes(pInt(item.uid)))
					: [];

		messages.forEach(item => {
			if (item && item.isUnseen()) {
				++unseenCount;
			}
		});

		if (fromFolder && !copy) {
			fromFolder.messageCountAll(
				0 <= fromFolder.messageCountAll() - uidForRemove.length ? fromFolder.messageCountAll() - uidForRemove.length : 0
			);

			if (0 < unseenCount) {
				fromFolder.messageCountUnread(
					0 <= fromFolder.messageCountUnread() - unseenCount ? fromFolder.messageCountUnread() - unseenCount : 0
				);
			}
		}

		if (toFolder) {
			if (trashFolder === toFolder.fullName || spamFolder === toFolder.fullName) {
				unseenCount = 0;
			}

			toFolder.messageCountAll(toFolder.messageCountAll() + uidForRemove.length);
			if (0 < unseenCount) {
				toFolder.messageCountUnread(toFolder.messageCountUnread() + unseenCount);
			}

			toFolder.actionBlink(true);
		}

		if (messages.length) {
			if (copy) {
				messages.forEach(item => item.checked(false));
			} else {
				this.listIsIncomplete(true);

				messages.forEach(item => {
					if (currentMessage && currentMessage.hash === item.hash) {
						currentMessage = null;
						this.message(null);
					}

					item.deleted(true);
				});

				setTimeout(() => messages.forEach(item => messageList.remove(item)), 350);
			}
		}

		if (fromFolderFullName) {
			setFolderHash(fromFolderFullName, '');
		}

		if (toFolderFullName) {
			setFolderHash(toFolderFullName, '');
		}

		if (this.listThreadUid()) {
			if (
				messageList.length &&
				!!messageList.find(item => !!(item && item.deleted() && item.uid == this.listThreadUid()))
			) {
				const message = messageList.find(item => item && !item.deleted());
				if (message && this.listThreadUid() != message.uid) {
					this.listThreadUid(message.uid);

					rl.route.setHash(
						mailBox(
							FolderUserStore.currentFolderFullNameHash(),
							this.listPage(),
							this.listSearch(),
							this.listThreadUid()
						),
						true,
						true
					);
				} else if (!message) {
					if (1 < this.listPage()) {
						this.listPage(this.listPage() - 1);

						rl.route.setHash(
							mailBox(
								FolderUserStore.currentFolderFullNameHash(),
								this.listPage(),
								this.listSearch(),
								this.listThreadUid()
							),
							true,
							true
						);
					} else {
						this.listThreadUid(0);

						rl.route.setHash(
							mailBox(
								FolderUserStore.currentFolderFullNameHash(),
								this.listPageBeforeThread(),
								this.listSearch()
							),
							true,
							true
						);
					}
				}
			}
		}
	}

	setMessage(data, cached, oMessage) {
		let isNew = false,
			json = data && data.Result,
			message = oMessage || this.message();

		if (
			json &&
			MessageModel.validJson(json) &&
			message &&
			message.folder === json.Folder
		) {
			const threads = message.threads(),
				messagesDom = this.messagesBodiesDom();
			if (!oMessage && message.uid != json.Uid && threads.includes(json.Uid)) {
				message = MessageModel.reviveFromJson(json);
				if (message) {
					message.threads(threads);
					MessageFlagsCache.initMessage(message);

					this.message(this.staticMessage.populateByMessageListItem(message));
					message = this.message();

					isNew = true;
				}
			}

			if (message && message.uid == json.Uid) {
				oMessage || this.messageError('');
/*
				if (cached) {
					delete json.Flags;
				}
*/
				isNew || message.revivePropertiesFromJson(json);
				addRequestedMessage(message.folder, message.uid);
				if (messagesDom) {
					let id = 'rl-msg-' + message.hash.replace(/[^a-zA-Z0-9]/g, ''),
						body = elementById(id);
					if (body) {
						message.body = body;
						message.isHtml(body.classList.contains('html'));
						message.hasImages(body.rlHasImages);
					} else {
						body = Element.fromHTML('<div id="' + id + '" hidden="" class="b-text-part '
							+ (message.pgpSigned() ? ' openpgp-signed' : '')
							+ (message.isPgpEncrypted() ? ' openpgp-encrypted' : '')
							+ '">'
							+ '</div>');

						body.rlHasImages = !!json.HasExternals;
						message.hasImages(body.rlHasImages);

						message.body = body;
						if (!SettingsUserStore.viewHTML() || !message.viewHtml()) {
							message.viewPlain();
						}

						this.purgeMessageBodyCache();
					}

					messagesDom.append(body);

					oMessage || this.messageActiveDom(message.body);

					oMessage || this.hideMessageBodies();

					oMessage || (message.body.hidden = false);
					oMessage && message.viewPopupMessage();
				}

				MessageFlagsCache.initMessage(message);
				if (message.isUnseen()) {
					MessageSeenTimer = setTimeout(
						() => rl.app.messageListAction(message.folder, MessageSetAction.SetSeen, [message]),
						SettingsUserStore.messageReadDelay() * 1000 // seconds
					);
				}

				if (message && isNew) {
					let selectedMessage = this.selectorMessageSelected();
					if (
						selectedMessage &&
						(message.folder !== selectedMessage.folder || message.uid != selectedMessage.uid)
					) {
						this.selectorMessageSelected(null);
						if (1 === this.list.length) {
							this.selectorMessageFocused(null);
						}
					} else if (!selectedMessage) {
						selectedMessage = this.list.find(
							subMessage =>
								subMessage &&
								subMessage.folder === message.folder &&
								subMessage.uid == message.uid
						);

						if (selectedMessage) {
							this.selectorMessageSelected(selectedMessage);
							this.selectorMessageFocused(selectedMessage);
						}
					}
				}
			}
		}
	}

	selectMessage(oMessage) {
		if (oMessage) {
			this.message(this.staticMessage.populateByMessageListItem(oMessage));
			this.populateMessageBody(this.message());
		} else {
			this.message(null);
		}
	}

	selectMessageByFolderAndUid(sFolder, iUid) {
		if (sFolder && iUid) {
			this.message(this.staticMessage.populateByMessageListItem(null));
			this.message().folder = sFolder;
			this.message().uid = iUid;

			this.populateMessageBody(this.message());
		} else {
			this.message(null);
		}
	}

	populateMessageBody(oMessage, preload) {
		if (oMessage) {
			preload || this.hideMessageBodies();
			preload || this.messageLoading(true);
			rl.app.Remote.message((iError, oData, bCached) => {
				if (iError) {
					if (Notification.RequestAborted !== iError && !preload) {
						this.message(null);
						this.messageError(getNotification(iError));
					}
				} else {
					this.setMessage(oData, bCached, preload ? oMessage : null);
				}
				preload || this.messageLoading(false);
			}, oMessage.folder, oMessage.uid);
		}
	}

	/**
	 * @param {Array} list
	 * @returns {string}
	 */
	calculateMessageListHash(list) {
		return list.map(message => message.hash + '_' + message.threadsLen() + '_' + message.flagHash()).join(
			'|'
		);
	}

	setMessageList(data, cached) {
		const collection = MessageCollectionModel.reviveFromJson(data.Result, cached);
		if (collection) {
			let unreadCountChange = false;

			const
				folder = getFolderFromCacheList(collection.Folder);

			if (folder && !cached) {
				folder.expires = Date.now();

				setFolderHash(collection.Folder, collection.FolderHash);

				if (null != collection.MessageCount) {
					folder.messageCountAll(collection.MessageCount);
				}

				if (null != collection.MessageUnseenCount) {
					if (pInt(folder.messageCountUnread()) !== pInt(collection.MessageUnseenCount)) {
						unreadCountChange = true;
						MessageFlagsCache.clearFolder(folder.fullName);
					}

					folder.messageCountUnread(collection.MessageUnseenCount);
				}

				this.initUidNextAndNewMessages(folder.fullName, collection.UidNext, collection.NewMessages);
			}

			this.listCount(collection.MessageResultCount);
			this.listSearch(pString(collection.Search));
			this.listPage(Math.ceil(collection.Offset / SettingsUserStore.messagesPerPage() + 1));
			this.listThreadUid(collection.ThreadUid);

			this.listEndHash(
				collection.Folder +
				'|' + collection.Search +
				'|' + this.listThreadUid() +
				'|' + this.listPage()
			);
			this.listEndThreadUid(collection.ThreadUid);
			const message = this.message();
			if (message && collection.Folder !== message.folder) {
				this.message(null);
			}

			this.listDisableAutoSelect(true);

			this.list(collection);
			this.listIsIncomplete(false);

			clearNewMessageCache();

			if (folder && (cached || unreadCountChange || SettingsUserStore.useThreads())) {
				rl.app.folderInformation(folder.fullName, collection);
			}
		} else {
			this.listCount(0);
			this.list([]);
			this.listError(getNotification(Notification.CantGetMessageList));
		}
	}
};
