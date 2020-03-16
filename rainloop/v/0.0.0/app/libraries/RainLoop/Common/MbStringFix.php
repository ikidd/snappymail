<?php

if (!function_exists('mb_strtoupper'))
{
	function mb_strtoupper($s, $encoding = INF)
	{
		if ('' === $s .= '') return '';

		if (INF === $encoding) $encoding = 'UTF-8';
		else $encoding = strtoupper($encoding);

		if ('UTF-8' === $encoding || 'UTF8' === $encoding) $encoding = INF;
		else $s = function_exists('iconv') ? iconv($encoding, 'UTF-8//IGNORE', $s) : $s;

		static $upper;
		isset($upper) || $upper = unserialize(base64_decode('YToxMDUxOntzOjE6ImEiO3M6MToiQSI7czoxOiJiIjtzOjE6IkIiO3M6MToiYyI7czoxOiJDIjtz
OjE6ImQiO3M6MToiRCI7czoxOiJlIjtzOjE6IkUiO3M6MToiZiI7czoxOiJGIjtzOjE6ImciO3M6
MToiRyI7czoxOiJoIjtzOjE6IkgiO3M6MToiaSI7czoxOiJJIjtzOjE6ImoiO3M6MToiSiI7czox
OiJrIjtzOjE6IksiO3M6MToibCI7czoxOiJMIjtzOjE6Im0iO3M6MToiTSI7czoxOiJuIjtzOjE6
Ik4iO3M6MToibyI7czoxOiJPIjtzOjE6InAiO3M6MToiUCI7czoxOiJxIjtzOjE6IlEiO3M6MToi
ciI7czoxOiJSIjtzOjE6InMiO3M6MToiUyI7czoxOiJ0IjtzOjE6IlQiO3M6MToidSI7czoxOiJV
IjtzOjE6InYiO3M6MToiViI7czoxOiJ3IjtzOjE6IlciO3M6MToieCI7czoxOiJYIjtzOjE6Inki
O3M6MToiWSI7czoxOiJ6IjtzOjE6IloiO3M6MjoiwrUiO3M6MjoizpwiO3M6Mjoiw6AiO3M6Mjoi
w4AiO3M6Mjoiw6EiO3M6Mjoiw4EiO3M6Mjoiw6IiO3M6Mjoiw4IiO3M6Mjoiw6MiO3M6Mjoiw4Mi
O3M6Mjoiw6QiO3M6Mjoiw4QiO3M6Mjoiw6UiO3M6Mjoiw4UiO3M6Mjoiw6YiO3M6Mjoiw4YiO3M6
Mjoiw6ciO3M6Mjoiw4ciO3M6Mjoiw6giO3M6Mjoiw4giO3M6Mjoiw6kiO3M6Mjoiw4kiO3M6Mjoi
w6oiO3M6Mjoiw4oiO3M6Mjoiw6siO3M6Mjoiw4siO3M6Mjoiw6wiO3M6Mjoiw4wiO3M6Mjoiw60i
O3M6Mjoiw40iO3M6Mjoiw64iO3M6Mjoiw44iO3M6Mjoiw68iO3M6Mjoiw48iO3M6Mjoiw7AiO3M6
Mjoiw5AiO3M6Mjoiw7EiO3M6Mjoiw5EiO3M6Mjoiw7IiO3M6Mjoiw5IiO3M6Mjoiw7MiO3M6Mjoi
w5MiO3M6Mjoiw7QiO3M6Mjoiw5QiO3M6Mjoiw7UiO3M6Mjoiw5UiO3M6Mjoiw7YiO3M6Mjoiw5Yi
O3M6Mjoiw7giO3M6Mjoiw5giO3M6Mjoiw7kiO3M6Mjoiw5kiO3M6Mjoiw7oiO3M6Mjoiw5oiO3M6
Mjoiw7siO3M6Mjoiw5siO3M6Mjoiw7wiO3M6Mjoiw5wiO3M6Mjoiw70iO3M6Mjoiw50iO3M6Mjoi
w74iO3M6Mjoiw54iO3M6Mjoiw78iO3M6MjoixbgiO3M6MjoixIEiO3M6MjoixIAiO3M6MjoixIMi
O3M6MjoixIIiO3M6MjoixIUiO3M6MjoixIQiO3M6MjoixIciO3M6MjoixIYiO3M6MjoixIkiO3M6
MjoixIgiO3M6MjoixIsiO3M6MjoixIoiO3M6MjoixI0iO3M6MjoixIwiO3M6MjoixI8iO3M6Mjoi
xI4iO3M6MjoixJEiO3M6MjoixJAiO3M6MjoixJMiO3M6MjoixJIiO3M6MjoixJUiO3M6MjoixJQi
O3M6MjoixJciO3M6MjoixJYiO3M6MjoixJkiO3M6MjoixJgiO3M6MjoixJsiO3M6MjoixJoiO3M6
MjoixJ0iO3M6MjoixJwiO3M6MjoixJ8iO3M6MjoixJ4iO3M6MjoixKEiO3M6MjoixKAiO3M6Mjoi
xKMiO3M6MjoixKIiO3M6MjoixKUiO3M6MjoixKQiO3M6MjoixKciO3M6MjoixKYiO3M6MjoixKki
O3M6MjoixKgiO3M6MjoixKsiO3M6MjoixKoiO3M6MjoixK0iO3M6MjoixKwiO3M6MjoixK8iO3M6
MjoixK4iO3M6MjoixLEiO3M6MToiSSI7czoyOiLEsyI7czoyOiLEsiI7czoyOiLEtSI7czoyOiLE
tCI7czoyOiLEtyI7czoyOiLEtiI7czoyOiLEuiI7czoyOiLEuSI7czoyOiLEvCI7czoyOiLEuyI7
czoyOiLEviI7czoyOiLEvSI7czoyOiLFgCI7czoyOiLEvyI7czoyOiLFgiI7czoyOiLFgSI7czoy
OiLFhCI7czoyOiLFgyI7czoyOiLFhiI7czoyOiLFhSI7czoyOiLFiCI7czoyOiLFhyI7czoyOiLF
iyI7czoyOiLFiiI7czoyOiLFjSI7czoyOiLFjCI7czoyOiLFjyI7czoyOiLFjiI7czoyOiLFkSI7
czoyOiLFkCI7czoyOiLFkyI7czoyOiLFkiI7czoyOiLFlSI7czoyOiLFlCI7czoyOiLFlyI7czoy
OiLFliI7czoyOiLFmSI7czoyOiLFmCI7czoyOiLFmyI7czoyOiLFmiI7czoyOiLFnSI7czoyOiLF
nCI7czoyOiLFnyI7czoyOiLFniI7czoyOiLFoSI7czoyOiLFoCI7czoyOiLFoyI7czoyOiLFoiI7
czoyOiLFpSI7czoyOiLFpCI7czoyOiLFpyI7czoyOiLFpiI7czoyOiLFqSI7czoyOiLFqCI7czoy
OiLFqyI7czoyOiLFqiI7czoyOiLFrSI7czoyOiLFrCI7czoyOiLFryI7czoyOiLFriI7czoyOiLF
sSI7czoyOiLFsCI7czoyOiLFsyI7czoyOiLFsiI7czoyOiLFtSI7czoyOiLFtCI7czoyOiLFtyI7
czoyOiLFtiI7czoyOiLFuiI7czoyOiLFuSI7czoyOiLFvCI7czoyOiLFuyI7czoyOiLFviI7czoy
OiLFvSI7czoyOiLFvyI7czoxOiJTIjtzOjI6IsaAIjtzOjI6IsmDIjtzOjI6IsaDIjtzOjI6IsaC
IjtzOjI6IsaFIjtzOjI6IsaEIjtzOjI6IsaIIjtzOjI6IsaHIjtzOjI6IsaMIjtzOjI6IsaLIjtz
OjI6IsaSIjtzOjI6IsaRIjtzOjI6IsaVIjtzOjI6Ise2IjtzOjI6IsaZIjtzOjI6IsaYIjtzOjI6
IsaaIjtzOjI6Isi9IjtzOjI6IsaeIjtzOjI6IsigIjtzOjI6IsahIjtzOjI6IsagIjtzOjI6Isaj
IjtzOjI6IsaiIjtzOjI6IsalIjtzOjI6IsakIjtzOjI6IsaoIjtzOjI6IsanIjtzOjI6IsatIjtz
OjI6IsasIjtzOjI6IsawIjtzOjI6IsavIjtzOjI6Isa0IjtzOjI6IsazIjtzOjI6Isa2IjtzOjI6
Isa1IjtzOjI6Isa5IjtzOjI6Isa4IjtzOjI6Isa9IjtzOjI6Isa8IjtzOjI6Isa/IjtzOjI6Ise3
IjtzOjI6IseFIjtzOjI6IseEIjtzOjI6IseGIjtzOjI6IseEIjtzOjI6IseIIjtzOjI6IseHIjtz
OjI6IseJIjtzOjI6IseHIjtzOjI6IseLIjtzOjI6IseKIjtzOjI6IseMIjtzOjI6IseKIjtzOjI6
IseOIjtzOjI6IseNIjtzOjI6IseQIjtzOjI6IsePIjtzOjI6IseSIjtzOjI6IseRIjtzOjI6IseU
IjtzOjI6IseTIjtzOjI6IseWIjtzOjI6IseVIjtzOjI6IseYIjtzOjI6IseXIjtzOjI6IseaIjtz
OjI6IseZIjtzOjI6IsecIjtzOjI6IsebIjtzOjI6IsedIjtzOjI6IsaOIjtzOjI6IsefIjtzOjI6
IseeIjtzOjI6IsehIjtzOjI6IsegIjtzOjI6IsejIjtzOjI6IseiIjtzOjI6IselIjtzOjI6Isek
IjtzOjI6IsenIjtzOjI6IsemIjtzOjI6IsepIjtzOjI6IseoIjtzOjI6IserIjtzOjI6IseqIjtz
OjI6IsetIjtzOjI6IsesIjtzOjI6IsevIjtzOjI6IseuIjtzOjI6IseyIjtzOjI6IsexIjtzOjI6
IsezIjtzOjI6IsexIjtzOjI6Ise1IjtzOjI6Ise0IjtzOjI6Ise5IjtzOjI6Ise4IjtzOjI6Ise7
IjtzOjI6Ise6IjtzOjI6Ise9IjtzOjI6Ise8IjtzOjI6Ise/IjtzOjI6Ise+IjtzOjI6IsiBIjtz
OjI6IsiAIjtzOjI6IsiDIjtzOjI6IsiCIjtzOjI6IsiFIjtzOjI6IsiEIjtzOjI6IsiHIjtzOjI6
IsiGIjtzOjI6IsiJIjtzOjI6IsiIIjtzOjI6IsiLIjtzOjI6IsiKIjtzOjI6IsiNIjtzOjI6IsiM
IjtzOjI6IsiPIjtzOjI6IsiOIjtzOjI6IsiRIjtzOjI6IsiQIjtzOjI6IsiTIjtzOjI6IsiSIjtz
OjI6IsiVIjtzOjI6IsiUIjtzOjI6IsiXIjtzOjI6IsiWIjtzOjI6IsiZIjtzOjI6IsiYIjtzOjI6
IsibIjtzOjI6IsiaIjtzOjI6IsidIjtzOjI6IsicIjtzOjI6IsifIjtzOjI6IsieIjtzOjI6Isij
IjtzOjI6IsiiIjtzOjI6IsilIjtzOjI6IsikIjtzOjI6IsinIjtzOjI6IsimIjtzOjI6IsipIjtz
OjI6IsioIjtzOjI6IsirIjtzOjI6IsiqIjtzOjI6IsitIjtzOjI6IsisIjtzOjI6IsivIjtzOjI6
IsiuIjtzOjI6IsixIjtzOjI6IsiwIjtzOjI6IsizIjtzOjI6IsiyIjtzOjI6Isi8IjtzOjI6Isi7
IjtzOjI6Isi/IjtzOjM6IuKxviI7czoyOiLJgCI7czozOiLisb8iO3M6MjoiyYIiO3M6MjoiyYEi
O3M6MjoiyYciO3M6MjoiyYYiO3M6MjoiyYkiO3M6MjoiyYgiO3M6MjoiyYsiO3M6MjoiyYoiO3M6
MjoiyY0iO3M6MjoiyYwiO3M6MjoiyY8iO3M6MjoiyY4iO3M6MjoiyZAiO3M6Mzoi4rGvIjtzOjI6
IsmRIjtzOjM6IuKxrSI7czoyOiLJkiI7czozOiLisbAiO3M6MjoiyZMiO3M6MjoixoEiO3M6Mjoi
yZQiO3M6MjoixoYiO3M6MjoiyZYiO3M6MjoixokiO3M6MjoiyZciO3M6MjoixooiO3M6MjoiyZki
O3M6Mjoixo8iO3M6MjoiyZsiO3M6MjoixpAiO3M6MjoiyaAiO3M6MjoixpMiO3M6MjoiyaMiO3M6
MjoixpQiO3M6MjoiyaUiO3M6Mzoi6p6NIjtzOjI6IsmmIjtzOjM6IuqeqiI7czoyOiLJqCI7czoy
OiLGlyI7czoyOiLJqSI7czoyOiLGliI7czoyOiLJqyI7czozOiLisaIiO3M6Mjoiya8iO3M6Mjoi
xpwiO3M6MjoiybEiO3M6Mzoi4rGuIjtzOjI6IsmyIjtzOjI6IsadIjtzOjI6Ism1IjtzOjI6Isaf
IjtzOjI6Ism9IjtzOjM6IuKxpCI7czoyOiLKgCI7czoyOiLGpiI7czoyOiLKgyI7czoyOiLGqSI7
czoyOiLKiCI7czoyOiLGriI7czoyOiLKiSI7czoyOiLJhCI7czoyOiLKiiI7czoyOiLGsSI7czoy
OiLKiyI7czoyOiLGsiI7czoyOiLKjCI7czoyOiLJhSI7czoyOiLKkiI7czoyOiLGtyI7czoyOiLN
hSI7czoyOiLOmSI7czoyOiLNsSI7czoyOiLNsCI7czoyOiLNsyI7czoyOiLNsiI7czoyOiLNtyI7
czoyOiLNtiI7czoyOiLNuyI7czoyOiLPvSI7czoyOiLNvCI7czoyOiLPviI7czoyOiLNvSI7czoy
OiLPvyI7czoyOiLOrCI7czoyOiLOhiI7czoyOiLOrSI7czoyOiLOiCI7czoyOiLOriI7czoyOiLO
iSI7czoyOiLOryI7czoyOiLOiiI7czoyOiLOsSI7czoyOiLOkSI7czoyOiLOsiI7czoyOiLOkiI7
czoyOiLOsyI7czoyOiLOkyI7czoyOiLOtCI7czoyOiLOlCI7czoyOiLOtSI7czoyOiLOlSI7czoy
OiLOtiI7czoyOiLOliI7czoyOiLOtyI7czoyOiLOlyI7czoyOiLOuCI7czoyOiLOmCI7czoyOiLO
uSI7czoyOiLOmSI7czoyOiLOuiI7czoyOiLOmiI7czoyOiLOuyI7czoyOiLOmyI7czoyOiLOvCI7
czoyOiLOnCI7czoyOiLOvSI7czoyOiLOnSI7czoyOiLOviI7czoyOiLOniI7czoyOiLOvyI7czoy
OiLOnyI7czoyOiLPgCI7czoyOiLOoCI7czoyOiLPgSI7czoyOiLOoSI7czoyOiLPgiI7czoyOiLO
oyI7czoyOiLPgyI7czoyOiLOoyI7czoyOiLPhCI7czoyOiLOpCI7czoyOiLPhSI7czoyOiLOpSI7
czoyOiLPhiI7czoyOiLOpiI7czoyOiLPhyI7czoyOiLOpyI7czoyOiLPiCI7czoyOiLOqCI7czoy
OiLPiSI7czoyOiLOqSI7czoyOiLPiiI7czoyOiLOqiI7czoyOiLPiyI7czoyOiLOqyI7czoyOiLP
jCI7czoyOiLOjCI7czoyOiLPjSI7czoyOiLOjiI7czoyOiLPjiI7czoyOiLOjyI7czoyOiLPkCI7
czoyOiLOkiI7czoyOiLPkSI7czoyOiLOmCI7czoyOiLPlSI7czoyOiLOpiI7czoyOiLPliI7czoy
OiLOoCI7czoyOiLPlyI7czoyOiLPjyI7czoyOiLPmSI7czoyOiLPmCI7czoyOiLPmyI7czoyOiLP
miI7czoyOiLPnSI7czoyOiLPnCI7czoyOiLPnyI7czoyOiLPniI7czoyOiLPoSI7czoyOiLPoCI7
czoyOiLPoyI7czoyOiLPoiI7czoyOiLPpSI7czoyOiLPpCI7czoyOiLPpyI7czoyOiLPpiI7czoy
OiLPqSI7czoyOiLPqCI7czoyOiLPqyI7czoyOiLPqiI7czoyOiLPrSI7czoyOiLPrCI7czoyOiLP
ryI7czoyOiLPriI7czoyOiLPsCI7czoyOiLOmiI7czoyOiLPsSI7czoyOiLOoSI7czoyOiLPsiI7
czoyOiLPuSI7czoyOiLPtSI7czoyOiLOlSI7czoyOiLPuCI7czoyOiLPtyI7czoyOiLPuyI7czoy
OiLPuiI7czoyOiLQsCI7czoyOiLQkCI7czoyOiLQsSI7czoyOiLQkSI7czoyOiLQsiI7czoyOiLQ
kiI7czoyOiLQsyI7czoyOiLQkyI7czoyOiLQtCI7czoyOiLQlCI7czoyOiLQtSI7czoyOiLQlSI7
czoyOiLQtiI7czoyOiLQliI7czoyOiLQtyI7czoyOiLQlyI7czoyOiLQuCI7czoyOiLQmCI7czoy
OiLQuSI7czoyOiLQmSI7czoyOiLQuiI7czoyOiLQmiI7czoyOiLQuyI7czoyOiLQmyI7czoyOiLQ
vCI7czoyOiLQnCI7czoyOiLQvSI7czoyOiLQnSI7czoyOiLQviI7czoyOiLQniI7czoyOiLQvyI7
czoyOiLQnyI7czoyOiLRgCI7czoyOiLQoCI7czoyOiLRgSI7czoyOiLQoSI7czoyOiLRgiI7czoy
OiLQoiI7czoyOiLRgyI7czoyOiLQoyI7czoyOiLRhCI7czoyOiLQpCI7czoyOiLRhSI7czoyOiLQ
pSI7czoyOiLRhiI7czoyOiLQpiI7czoyOiLRhyI7czoyOiLQpyI7czoyOiLRiCI7czoyOiLQqCI7
czoyOiLRiSI7czoyOiLQqSI7czoyOiLRiiI7czoyOiLQqiI7czoyOiLRiyI7czoyOiLQqyI7czoy
OiLRjCI7czoyOiLQrCI7czoyOiLRjSI7czoyOiLQrSI7czoyOiLRjiI7czoyOiLQriI7czoyOiLR
jyI7czoyOiLQryI7czoyOiLRkCI7czoyOiLQgCI7czoyOiLRkSI7czoyOiLQgSI7czoyOiLRkiI7
czoyOiLQgiI7czoyOiLRkyI7czoyOiLQgyI7czoyOiLRlCI7czoyOiLQhCI7czoyOiLRlSI7czoy
OiLQhSI7czoyOiLRliI7czoyOiLQhiI7czoyOiLRlyI7czoyOiLQhyI7czoyOiLRmCI7czoyOiLQ
iCI7czoyOiLRmSI7czoyOiLQiSI7czoyOiLRmiI7czoyOiLQiiI7czoyOiLRmyI7czoyOiLQiyI7
czoyOiLRnCI7czoyOiLQjCI7czoyOiLRnSI7czoyOiLQjSI7czoyOiLRniI7czoyOiLQjiI7czoy
OiLRnyI7czoyOiLQjyI7czoyOiLRoSI7czoyOiLRoCI7czoyOiLRoyI7czoyOiLRoiI7czoyOiLR
pSI7czoyOiLRpCI7czoyOiLRpyI7czoyOiLRpiI7czoyOiLRqSI7czoyOiLRqCI7czoyOiLRqyI7
czoyOiLRqiI7czoyOiLRrSI7czoyOiLRrCI7czoyOiLRryI7czoyOiLRriI7czoyOiLRsSI7czoy
OiLRsCI7czoyOiLRsyI7czoyOiLRsiI7czoyOiLRtSI7czoyOiLRtCI7czoyOiLRtyI7czoyOiLR
tiI7czoyOiLRuSI7czoyOiLRuCI7czoyOiLRuyI7czoyOiLRuiI7czoyOiLRvSI7czoyOiLRvCI7
czoyOiLRvyI7czoyOiLRviI7czoyOiLSgSI7czoyOiLSgCI7czoyOiLSiyI7czoyOiLSiiI7czoy
OiLSjSI7czoyOiLSjCI7czoyOiLSjyI7czoyOiLSjiI7czoyOiLSkSI7czoyOiLSkCI7czoyOiLS
kyI7czoyOiLSkiI7czoyOiLSlSI7czoyOiLSlCI7czoyOiLSlyI7czoyOiLSliI7czoyOiLSmSI7
czoyOiLSmCI7czoyOiLSmyI7czoyOiLSmiI7czoyOiLSnSI7czoyOiLSnCI7czoyOiLSnyI7czoy
OiLSniI7czoyOiLSoSI7czoyOiLSoCI7czoyOiLSoyI7czoyOiLSoiI7czoyOiLSpSI7czoyOiLS
pCI7czoyOiLSpyI7czoyOiLSpiI7czoyOiLSqSI7czoyOiLSqCI7czoyOiLSqyI7czoyOiLSqiI7
czoyOiLSrSI7czoyOiLSrCI7czoyOiLSryI7czoyOiLSriI7czoyOiLSsSI7czoyOiLSsCI7czoy
OiLSsyI7czoyOiLSsiI7czoyOiLStSI7czoyOiLStCI7czoyOiLStyI7czoyOiLStiI7czoyOiLS
uSI7czoyOiLSuCI7czoyOiLSuyI7czoyOiLSuiI7czoyOiLSvSI7czoyOiLSvCI7czoyOiLSvyI7
czoyOiLSviI7czoyOiLTgiI7czoyOiLTgSI7czoyOiLThCI7czoyOiLTgyI7czoyOiLThiI7czoy
OiLThSI7czoyOiLTiCI7czoyOiLThyI7czoyOiLTiiI7czoyOiLTiSI7czoyOiLTjCI7czoyOiLT
iyI7czoyOiLTjiI7czoyOiLTjSI7czoyOiLTjyI7czoyOiLTgCI7czoyOiLTkSI7czoyOiLTkCI7
czoyOiLTkyI7czoyOiLTkiI7czoyOiLTlSI7czoyOiLTlCI7czoyOiLTlyI7czoyOiLTliI7czoy
OiLTmSI7czoyOiLTmCI7czoyOiLTmyI7czoyOiLTmiI7czoyOiLTnSI7czoyOiLTnCI7czoyOiLT
nyI7czoyOiLTniI7czoyOiLToSI7czoyOiLToCI7czoyOiLToyI7czoyOiLToiI7czoyOiLTpSI7
czoyOiLTpCI7czoyOiLTpyI7czoyOiLTpiI7czoyOiLTqSI7czoyOiLTqCI7czoyOiLTqyI7czoy
OiLTqiI7czoyOiLTrSI7czoyOiLTrCI7czoyOiLTryI7czoyOiLTriI7czoyOiLTsSI7czoyOiLT
sCI7czoyOiLTsyI7czoyOiLTsiI7czoyOiLTtSI7czoyOiLTtCI7czoyOiLTtyI7czoyOiLTtiI7
czoyOiLTuSI7czoyOiLTuCI7czoyOiLTuyI7czoyOiLTuiI7czoyOiLTvSI7czoyOiLTvCI7czoy
OiLTvyI7czoyOiLTviI7czoyOiLUgSI7czoyOiLUgCI7czoyOiLUgyI7czoyOiLUgiI7czoyOiLU
hSI7czoyOiLUhCI7czoyOiLUhyI7czoyOiLUhiI7czoyOiLUiSI7czoyOiLUiCI7czoyOiLUiyI7
czoyOiLUiiI7czoyOiLUjSI7czoyOiLUjCI7czoyOiLUjyI7czoyOiLUjiI7czoyOiLUkSI7czoy
OiLUkCI7czoyOiLUkyI7czoyOiLUkiI7czoyOiLUlSI7czoyOiLUlCI7czoyOiLUlyI7czoyOiLU
liI7czoyOiLUmSI7czoyOiLUmCI7czoyOiLUmyI7czoyOiLUmiI7czoyOiLUnSI7czoyOiLUnCI7
czoyOiLUnyI7czoyOiLUniI7czoyOiLUoSI7czoyOiLUoCI7czoyOiLUoyI7czoyOiLUoiI7czoy
OiLUpSI7czoyOiLUpCI7czoyOiLUpyI7czoyOiLUpiI7czoyOiLVoSI7czoyOiLUsSI7czoyOiLV
oiI7czoyOiLUsiI7czoyOiLVoyI7czoyOiLUsyI7czoyOiLVpCI7czoyOiLUtCI7czoyOiLVpSI7
czoyOiLUtSI7czoyOiLVpiI7czoyOiLUtiI7czoyOiLVpyI7czoyOiLUtyI7czoyOiLVqCI7czoy
OiLUuCI7czoyOiLVqSI7czoyOiLUuSI7czoyOiLVqiI7czoyOiLUuiI7czoyOiLVqyI7czoyOiLU
uyI7czoyOiLVrCI7czoyOiLUvCI7czoyOiLVrSI7czoyOiLUvSI7czoyOiLVriI7czoyOiLUviI7
czoyOiLVryI7czoyOiLUvyI7czoyOiLVsCI7czoyOiLVgCI7czoyOiLVsSI7czoyOiLVgSI7czoy
OiLVsiI7czoyOiLVgiI7czoyOiLVsyI7czoyOiLVgyI7czoyOiLVtCI7czoyOiLVhCI7czoyOiLV
tSI7czoyOiLVhSI7czoyOiLVtiI7czoyOiLVhiI7czoyOiLVtyI7czoyOiLVhyI7czoyOiLVuCI7
czoyOiLViCI7czoyOiLVuSI7czoyOiLViSI7czoyOiLVuiI7czoyOiLViiI7czoyOiLVuyI7czoy
OiLViyI7czoyOiLVvCI7czoyOiLVjCI7czoyOiLVvSI7czoyOiLVjSI7czoyOiLVviI7czoyOiLV
jiI7czoyOiLVvyI7czoyOiLVjyI7czoyOiLWgCI7czoyOiLVkCI7czoyOiLWgSI7czoyOiLVkSI7
czoyOiLWgiI7czoyOiLVkiI7czoyOiLWgyI7czoyOiLVkyI7czoyOiLWhCI7czoyOiLVlCI7czoy
OiLWhSI7czoyOiLVlSI7czoyOiLWhiI7czoyOiLVliI7czozOiLhtbkiO3M6Mzoi6p29IjtzOjM6
IuG1vSI7czozOiLisaMiO3M6Mzoi4biBIjtzOjM6IuG4gCI7czozOiLhuIMiO3M6Mzoi4biCIjtz
OjM6IuG4hSI7czozOiLhuIQiO3M6Mzoi4biHIjtzOjM6IuG4hiI7czozOiLhuIkiO3M6Mzoi4biI
IjtzOjM6IuG4iyI7czozOiLhuIoiO3M6Mzoi4biNIjtzOjM6IuG4jCI7czozOiLhuI8iO3M6Mzoi
4biOIjtzOjM6IuG4kSI7czozOiLhuJAiO3M6Mzoi4biTIjtzOjM6IuG4kiI7czozOiLhuJUiO3M6
Mzoi4biUIjtzOjM6IuG4lyI7czozOiLhuJYiO3M6Mzoi4biZIjtzOjM6IuG4mCI7czozOiLhuJsi
O3M6Mzoi4biaIjtzOjM6IuG4nSI7czozOiLhuJwiO3M6Mzoi4bifIjtzOjM6IuG4niI7czozOiLh
uKEiO3M6Mzoi4bigIjtzOjM6IuG4oyI7czozOiLhuKIiO3M6Mzoi4bilIjtzOjM6IuG4pCI7czoz
OiLhuKciO3M6Mzoi4bimIjtzOjM6IuG4qSI7czozOiLhuKgiO3M6Mzoi4birIjtzOjM6IuG4qiI7
czozOiLhuK0iO3M6Mzoi4bisIjtzOjM6IuG4ryI7czozOiLhuK4iO3M6Mzoi4bixIjtzOjM6IuG4
sCI7czozOiLhuLMiO3M6Mzoi4biyIjtzOjM6IuG4tSI7czozOiLhuLQiO3M6Mzoi4bi3IjtzOjM6
IuG4tiI7czozOiLhuLkiO3M6Mzoi4bi4IjtzOjM6IuG4uyI7czozOiLhuLoiO3M6Mzoi4bi9Ijtz
OjM6IuG4vCI7czozOiLhuL8iO3M6Mzoi4bi+IjtzOjM6IuG5gSI7czozOiLhuYAiO3M6Mzoi4bmD
IjtzOjM6IuG5giI7czozOiLhuYUiO3M6Mzoi4bmEIjtzOjM6IuG5hyI7czozOiLhuYYiO3M6Mzoi
4bmJIjtzOjM6IuG5iCI7czozOiLhuYsiO3M6Mzoi4bmKIjtzOjM6IuG5jSI7czozOiLhuYwiO3M6
Mzoi4bmPIjtzOjM6IuG5jiI7czozOiLhuZEiO3M6Mzoi4bmQIjtzOjM6IuG5kyI7czozOiLhuZIi
O3M6Mzoi4bmVIjtzOjM6IuG5lCI7czozOiLhuZciO3M6Mzoi4bmWIjtzOjM6IuG5mSI7czozOiLh
uZgiO3M6Mzoi4bmbIjtzOjM6IuG5miI7czozOiLhuZ0iO3M6Mzoi4bmcIjtzOjM6IuG5nyI7czoz
OiLhuZ4iO3M6Mzoi4bmhIjtzOjM6IuG5oCI7czozOiLhuaMiO3M6Mzoi4bmiIjtzOjM6IuG5pSI7
czozOiLhuaQiO3M6Mzoi4bmnIjtzOjM6IuG5piI7czozOiLhuakiO3M6Mzoi4bmoIjtzOjM6IuG5
qyI7czozOiLhuaoiO3M6Mzoi4bmtIjtzOjM6IuG5rCI7czozOiLhua8iO3M6Mzoi4bmuIjtzOjM6
IuG5sSI7czozOiLhubAiO3M6Mzoi4bmzIjtzOjM6IuG5siI7czozOiLhubUiO3M6Mzoi4bm0Ijtz
OjM6IuG5tyI7czozOiLhubYiO3M6Mzoi4bm5IjtzOjM6IuG5uCI7czozOiLhubsiO3M6Mzoi4bm6
IjtzOjM6IuG5vSI7czozOiLhubwiO3M6Mzoi4bm/IjtzOjM6IuG5viI7czozOiLhuoEiO3M6Mzoi
4bqAIjtzOjM6IuG6gyI7czozOiLhuoIiO3M6Mzoi4bqFIjtzOjM6IuG6hCI7czozOiLhuociO3M6
Mzoi4bqGIjtzOjM6IuG6iSI7czozOiLhuogiO3M6Mzoi4bqLIjtzOjM6IuG6iiI7czozOiLhuo0i
O3M6Mzoi4bqMIjtzOjM6IuG6jyI7czozOiLhuo4iO3M6Mzoi4bqRIjtzOjM6IuG6kCI7czozOiLh
upMiO3M6Mzoi4bqSIjtzOjM6IuG6lSI7czozOiLhupQiO3M6Mzoi4bqbIjtzOjM6IuG5oCI7czoz
OiLhuqEiO3M6Mzoi4bqgIjtzOjM6IuG6oyI7czozOiLhuqIiO3M6Mzoi4bqlIjtzOjM6IuG6pCI7
czozOiLhuqciO3M6Mzoi4bqmIjtzOjM6IuG6qSI7czozOiLhuqgiO3M6Mzoi4bqrIjtzOjM6IuG6
qiI7czozOiLhuq0iO3M6Mzoi4bqsIjtzOjM6IuG6ryI7czozOiLhuq4iO3M6Mzoi4bqxIjtzOjM6
IuG6sCI7czozOiLhurMiO3M6Mzoi4bqyIjtzOjM6IuG6tSI7czozOiLhurQiO3M6Mzoi4bq3Ijtz
OjM6IuG6tiI7czozOiLhurkiO3M6Mzoi4bq4IjtzOjM6IuG6uyI7czozOiLhuroiO3M6Mzoi4bq9
IjtzOjM6IuG6vCI7czozOiLhur8iO3M6Mzoi4bq+IjtzOjM6IuG7gSI7czozOiLhu4AiO3M6Mzoi
4buDIjtzOjM6IuG7giI7czozOiLhu4UiO3M6Mzoi4buEIjtzOjM6IuG7hyI7czozOiLhu4YiO3M6
Mzoi4buJIjtzOjM6IuG7iCI7czozOiLhu4siO3M6Mzoi4buKIjtzOjM6IuG7jSI7czozOiLhu4wi
O3M6Mzoi4buPIjtzOjM6IuG7jiI7czozOiLhu5EiO3M6Mzoi4buQIjtzOjM6IuG7kyI7czozOiLh
u5IiO3M6Mzoi4buVIjtzOjM6IuG7lCI7czozOiLhu5ciO3M6Mzoi4buWIjtzOjM6IuG7mSI7czoz
OiLhu5giO3M6Mzoi4bubIjtzOjM6IuG7miI7czozOiLhu50iO3M6Mzoi4bucIjtzOjM6IuG7nyI7
czozOiLhu54iO3M6Mzoi4buhIjtzOjM6IuG7oCI7czozOiLhu6MiO3M6Mzoi4buiIjtzOjM6IuG7
pSI7czozOiLhu6QiO3M6Mzoi4bunIjtzOjM6IuG7piI7czozOiLhu6kiO3M6Mzoi4buoIjtzOjM6
IuG7qyI7czozOiLhu6oiO3M6Mzoi4butIjtzOjM6IuG7rCI7czozOiLhu68iO3M6Mzoi4buuIjtz
OjM6IuG7sSI7czozOiLhu7AiO3M6Mzoi4buzIjtzOjM6IuG7siI7czozOiLhu7UiO3M6Mzoi4bu0
IjtzOjM6IuG7tyI7czozOiLhu7YiO3M6Mzoi4bu5IjtzOjM6IuG7uCI7czozOiLhu7siO3M6Mzoi
4bu6IjtzOjM6IuG7vSI7czozOiLhu7wiO3M6Mzoi4bu/IjtzOjM6IuG7viI7czozOiLhvIAiO3M6
Mzoi4byIIjtzOjM6IuG8gSI7czozOiLhvIkiO3M6Mzoi4byCIjtzOjM6IuG8iiI7czozOiLhvIMi
O3M6Mzoi4byLIjtzOjM6IuG8hCI7czozOiLhvIwiO3M6Mzoi4byFIjtzOjM6IuG8jSI7czozOiLh
vIYiO3M6Mzoi4byOIjtzOjM6IuG8hyI7czozOiLhvI8iO3M6Mzoi4byQIjtzOjM6IuG8mCI7czoz
OiLhvJEiO3M6Mzoi4byZIjtzOjM6IuG8kiI7czozOiLhvJoiO3M6Mzoi4byTIjtzOjM6IuG8myI7
czozOiLhvJQiO3M6Mzoi4bycIjtzOjM6IuG8lSI7czozOiLhvJ0iO3M6Mzoi4bygIjtzOjM6IuG8
qCI7czozOiLhvKEiO3M6Mzoi4bypIjtzOjM6IuG8oiI7czozOiLhvKoiO3M6Mzoi4byjIjtzOjM6
IuG8qyI7czozOiLhvKQiO3M6Mzoi4bysIjtzOjM6IuG8pSI7czozOiLhvK0iO3M6Mzoi4bymIjtz
OjM6IuG8riI7czozOiLhvKciO3M6Mzoi4byvIjtzOjM6IuG8sCI7czozOiLhvLgiO3M6Mzoi4byx
IjtzOjM6IuG8uSI7czozOiLhvLIiO3M6Mzoi4by6IjtzOjM6IuG8syI7czozOiLhvLsiO3M6Mzoi
4by0IjtzOjM6IuG8vCI7czozOiLhvLUiO3M6Mzoi4by9IjtzOjM6IuG8tiI7czozOiLhvL4iO3M6
Mzoi4by3IjtzOjM6IuG8vyI7czozOiLhvYAiO3M6Mzoi4b2IIjtzOjM6IuG9gSI7czozOiLhvYki
O3M6Mzoi4b2CIjtzOjM6IuG9iiI7czozOiLhvYMiO3M6Mzoi4b2LIjtzOjM6IuG9hCI7czozOiLh
vYwiO3M6Mzoi4b2FIjtzOjM6IuG9jSI7czozOiLhvZEiO3M6Mzoi4b2ZIjtzOjM6IuG9kyI7czoz
OiLhvZsiO3M6Mzoi4b2VIjtzOjM6IuG9nSI7czozOiLhvZciO3M6Mzoi4b2fIjtzOjM6IuG9oCI7
czozOiLhvagiO3M6Mzoi4b2hIjtzOjM6IuG9qSI7czozOiLhvaIiO3M6Mzoi4b2qIjtzOjM6IuG9
oyI7czozOiLhvasiO3M6Mzoi4b2kIjtzOjM6IuG9rCI7czozOiLhvaUiO3M6Mzoi4b2tIjtzOjM6
IuG9piI7czozOiLhva4iO3M6Mzoi4b2nIjtzOjM6IuG9ryI7czozOiLhvbAiO3M6Mzoi4b66Ijtz
OjM6IuG9sSI7czozOiLhvrsiO3M6Mzoi4b2yIjtzOjM6IuG/iCI7czozOiLhvbMiO3M6Mzoi4b+J
IjtzOjM6IuG9tCI7czozOiLhv4oiO3M6Mzoi4b21IjtzOjM6IuG/iyI7czozOiLhvbYiO3M6Mzoi
4b+aIjtzOjM6IuG9tyI7czozOiLhv5siO3M6Mzoi4b24IjtzOjM6IuG/uCI7czozOiLhvbkiO3M6
Mzoi4b+5IjtzOjM6IuG9uiI7czozOiLhv6oiO3M6Mzoi4b27IjtzOjM6IuG/qyI7czozOiLhvbwi
O3M6Mzoi4b+6IjtzOjM6IuG9vSI7czozOiLhv7siO3M6Mzoi4b6AIjtzOjM6IuG+iCI7czozOiLh
voEiO3M6Mzoi4b6JIjtzOjM6IuG+giI7czozOiLhvooiO3M6Mzoi4b6DIjtzOjM6IuG+iyI7czoz
OiLhvoQiO3M6Mzoi4b6MIjtzOjM6IuG+hSI7czozOiLhvo0iO3M6Mzoi4b6GIjtzOjM6IuG+jiI7
czozOiLhvociO3M6Mzoi4b6PIjtzOjM6IuG+kCI7czozOiLhvpgiO3M6Mzoi4b6RIjtzOjM6IuG+
mSI7czozOiLhvpIiO3M6Mzoi4b6aIjtzOjM6IuG+kyI7czozOiLhvpsiO3M6Mzoi4b6UIjtzOjM6
IuG+nCI7czozOiLhvpUiO3M6Mzoi4b6dIjtzOjM6IuG+liI7czozOiLhvp4iO3M6Mzoi4b6XIjtz
OjM6IuG+nyI7czozOiLhvqAiO3M6Mzoi4b6oIjtzOjM6IuG+oSI7czozOiLhvqkiO3M6Mzoi4b6i
IjtzOjM6IuG+qiI7czozOiLhvqMiO3M6Mzoi4b6rIjtzOjM6IuG+pCI7czozOiLhvqwiO3M6Mzoi
4b6lIjtzOjM6IuG+rSI7czozOiLhvqYiO3M6Mzoi4b6uIjtzOjM6IuG+pyI7czozOiLhvq8iO3M6
Mzoi4b6wIjtzOjM6IuG+uCI7czozOiLhvrEiO3M6Mzoi4b65IjtzOjM6IuG+syI7czozOiLhvrwi
O3M6Mzoi4b6+IjtzOjI6Is6ZIjtzOjM6IuG/gyI7czozOiLhv4wiO3M6Mzoi4b+QIjtzOjM6IuG/
mCI7czozOiLhv5EiO3M6Mzoi4b+ZIjtzOjM6IuG/oCI7czozOiLhv6giO3M6Mzoi4b+hIjtzOjM6
IuG/qSI7czozOiLhv6UiO3M6Mzoi4b+sIjtzOjM6IuG/syI7czozOiLhv7wiO3M6Mzoi4oWOIjtz
OjM6IuKEsiI7czozOiLihbAiO3M6Mzoi4oWgIjtzOjM6IuKFsSI7czozOiLihaEiO3M6Mzoi4oWy
IjtzOjM6IuKFoiI7czozOiLihbMiO3M6Mzoi4oWjIjtzOjM6IuKFtCI7czozOiLihaQiO3M6Mzoi
4oW1IjtzOjM6IuKFpSI7czozOiLihbYiO3M6Mzoi4oWmIjtzOjM6IuKFtyI7czozOiLihaciO3M6
Mzoi4oW4IjtzOjM6IuKFqCI7czozOiLihbkiO3M6Mzoi4oWpIjtzOjM6IuKFuiI7czozOiLihaoi
O3M6Mzoi4oW7IjtzOjM6IuKFqyI7czozOiLihbwiO3M6Mzoi4oWsIjtzOjM6IuKFvSI7czozOiLi
ha0iO3M6Mzoi4oW+IjtzOjM6IuKFriI7czozOiLihb8iO3M6Mzoi4oWvIjtzOjM6IuKGhCI7czoz
OiLihoMiO3M6Mzoi4pOQIjtzOjM6IuKStiI7czozOiLik5EiO3M6Mzoi4pK3IjtzOjM6IuKTkiI7
czozOiLikrgiO3M6Mzoi4pOTIjtzOjM6IuKSuSI7czozOiLik5QiO3M6Mzoi4pK6IjtzOjM6IuKT
lSI7czozOiLikrsiO3M6Mzoi4pOWIjtzOjM6IuKSvCI7czozOiLik5ciO3M6Mzoi4pK9IjtzOjM6
IuKTmCI7czozOiLikr4iO3M6Mzoi4pOZIjtzOjM6IuKSvyI7czozOiLik5oiO3M6Mzoi4pOAIjtz
OjM6IuKTmyI7czozOiLik4EiO3M6Mzoi4pOcIjtzOjM6IuKTgiI7czozOiLik50iO3M6Mzoi4pOD
IjtzOjM6IuKTniI7czozOiLik4QiO3M6Mzoi4pOfIjtzOjM6IuKThSI7czozOiLik6AiO3M6Mzoi
4pOGIjtzOjM6IuKToSI7czozOiLik4ciO3M6Mzoi4pOiIjtzOjM6IuKTiCI7czozOiLik6MiO3M6
Mzoi4pOJIjtzOjM6IuKTpCI7czozOiLik4oiO3M6Mzoi4pOlIjtzOjM6IuKTiyI7czozOiLik6Yi
O3M6Mzoi4pOMIjtzOjM6IuKTpyI7czozOiLik40iO3M6Mzoi4pOoIjtzOjM6IuKTjiI7czozOiLi
k6kiO3M6Mzoi4pOPIjtzOjM6IuKwsCI7czozOiLisIAiO3M6Mzoi4rCxIjtzOjM6IuKwgSI7czoz
OiLisLIiO3M6Mzoi4rCCIjtzOjM6IuKwsyI7czozOiLisIMiO3M6Mzoi4rC0IjtzOjM6IuKwhCI7
czozOiLisLUiO3M6Mzoi4rCFIjtzOjM6IuKwtiI7czozOiLisIYiO3M6Mzoi4rC3IjtzOjM6IuKw
hyI7czozOiLisLgiO3M6Mzoi4rCIIjtzOjM6IuKwuSI7czozOiLisIkiO3M6Mzoi4rC6IjtzOjM6
IuKwiiI7czozOiLisLsiO3M6Mzoi4rCLIjtzOjM6IuKwvCI7czozOiLisIwiO3M6Mzoi4rC9Ijtz
OjM6IuKwjSI7czozOiLisL4iO3M6Mzoi4rCOIjtzOjM6IuKwvyI7czozOiLisI8iO3M6Mzoi4rGA
IjtzOjM6IuKwkCI7czozOiLisYEiO3M6Mzoi4rCRIjtzOjM6IuKxgiI7czozOiLisJIiO3M6Mzoi
4rGDIjtzOjM6IuKwkyI7czozOiLisYQiO3M6Mzoi4rCUIjtzOjM6IuKxhSI7czozOiLisJUiO3M6
Mzoi4rGGIjtzOjM6IuKwliI7czozOiLisYciO3M6Mzoi4rCXIjtzOjM6IuKxiCI7czozOiLisJgi
O3M6Mzoi4rGJIjtzOjM6IuKwmSI7czozOiLisYoiO3M6Mzoi4rCaIjtzOjM6IuKxiyI7czozOiLi
sJsiO3M6Mzoi4rGMIjtzOjM6IuKwnCI7czozOiLisY0iO3M6Mzoi4rCdIjtzOjM6IuKxjiI7czoz
OiLisJ4iO3M6Mzoi4rGPIjtzOjM6IuKwnyI7czozOiLisZAiO3M6Mzoi4rCgIjtzOjM6IuKxkSI7
czozOiLisKEiO3M6Mzoi4rGSIjtzOjM6IuKwoiI7czozOiLisZMiO3M6Mzoi4rCjIjtzOjM6IuKx
lCI7czozOiLisKQiO3M6Mzoi4rGVIjtzOjM6IuKwpSI7czozOiLisZYiO3M6Mzoi4rCmIjtzOjM6
IuKxlyI7czozOiLisKciO3M6Mzoi4rGYIjtzOjM6IuKwqCI7czozOiLisZkiO3M6Mzoi4rCpIjtz
OjM6IuKxmiI7czozOiLisKoiO3M6Mzoi4rGbIjtzOjM6IuKwqyI7czozOiLisZwiO3M6Mzoi4rCs
IjtzOjM6IuKxnSI7czozOiLisK0iO3M6Mzoi4rGeIjtzOjM6IuKwriI7czozOiLisaEiO3M6Mzoi
4rGgIjtzOjM6IuKxpSI7czoyOiLIuiI7czozOiLisaYiO3M6MjoiyL4iO3M6Mzoi4rGoIjtzOjM6
IuKxpyI7czozOiLisaoiO3M6Mzoi4rGpIjtzOjM6IuKxrCI7czozOiLisasiO3M6Mzoi4rGzIjtz
OjM6IuKxsiI7czozOiLisbYiO3M6Mzoi4rG1IjtzOjM6IuKygSI7czozOiLisoAiO3M6Mzoi4rKD
IjtzOjM6IuKygiI7czozOiLisoUiO3M6Mzoi4rKEIjtzOjM6IuKyhyI7czozOiLisoYiO3M6Mzoi
4rKJIjtzOjM6IuKyiCI7czozOiLisosiO3M6Mzoi4rKKIjtzOjM6IuKyjSI7czozOiLisowiO3M6
Mzoi4rKPIjtzOjM6IuKyjiI7czozOiLispEiO3M6Mzoi4rKQIjtzOjM6IuKykyI7czozOiLispIi
O3M6Mzoi4rKVIjtzOjM6IuKylCI7czozOiLispciO3M6Mzoi4rKWIjtzOjM6IuKymSI7czozOiLi
spgiO3M6Mzoi4rKbIjtzOjM6IuKymiI7czozOiLisp0iO3M6Mzoi4rKcIjtzOjM6IuKynyI7czoz
OiLisp4iO3M6Mzoi4rKhIjtzOjM6IuKyoCI7czozOiLisqMiO3M6Mzoi4rKiIjtzOjM6IuKypSI7
czozOiLisqQiO3M6Mzoi4rKnIjtzOjM6IuKypiI7czozOiLisqkiO3M6Mzoi4rKoIjtzOjM6IuKy
qyI7czozOiLisqoiO3M6Mzoi4rKtIjtzOjM6IuKyrCI7czozOiLisq8iO3M6Mzoi4rKuIjtzOjM6
IuKysSI7czozOiLisrAiO3M6Mzoi4rKzIjtzOjM6IuKysiI7czozOiLisrUiO3M6Mzoi4rK0Ijtz
OjM6IuKytyI7czozOiLisrYiO3M6Mzoi4rK5IjtzOjM6IuKyuCI7czozOiLisrsiO3M6Mzoi4rK6
IjtzOjM6IuKyvSI7czozOiLisrwiO3M6Mzoi4rK/IjtzOjM6IuKyviI7czozOiLis4EiO3M6Mzoi
4rOAIjtzOjM6IuKzgyI7czozOiLis4IiO3M6Mzoi4rOFIjtzOjM6IuKzhCI7czozOiLis4ciO3M6
Mzoi4rOGIjtzOjM6IuKziSI7czozOiLis4giO3M6Mzoi4rOLIjtzOjM6IuKziiI7czozOiLis40i
O3M6Mzoi4rOMIjtzOjM6IuKzjyI7czozOiLis44iO3M6Mzoi4rORIjtzOjM6IuKzkCI7czozOiLi
s5MiO3M6Mzoi4rOSIjtzOjM6IuKzlSI7czozOiLis5QiO3M6Mzoi4rOXIjtzOjM6IuKzliI7czoz
OiLis5kiO3M6Mzoi4rOYIjtzOjM6IuKzmyI7czozOiLis5oiO3M6Mzoi4rOdIjtzOjM6IuKznCI7
czozOiLis58iO3M6Mzoi4rOeIjtzOjM6IuKzoSI7czozOiLis6AiO3M6Mzoi4rOjIjtzOjM6IuKz
oiI7czozOiLis6wiO3M6Mzoi4rOrIjtzOjM6IuKzriI7czozOiLis60iO3M6Mzoi4rOzIjtzOjM6
IuKzsiI7czozOiLitIAiO3M6Mzoi4YKgIjtzOjM6IuK0gSI7czozOiLhgqEiO3M6Mzoi4rSCIjtz
OjM6IuGCoiI7czozOiLitIMiO3M6Mzoi4YKjIjtzOjM6IuK0hCI7czozOiLhgqQiO3M6Mzoi4rSF
IjtzOjM6IuGCpSI7czozOiLitIYiO3M6Mzoi4YKmIjtzOjM6IuK0hyI7czozOiLhgqciO3M6Mzoi
4rSIIjtzOjM6IuGCqCI7czozOiLitIkiO3M6Mzoi4YKpIjtzOjM6IuK0iiI7czozOiLhgqoiO3M6
Mzoi4rSLIjtzOjM6IuGCqyI7czozOiLitIwiO3M6Mzoi4YKsIjtzOjM6IuK0jSI7czozOiLhgq0i
O3M6Mzoi4rSOIjtzOjM6IuGCriI7czozOiLitI8iO3M6Mzoi4YKvIjtzOjM6IuK0kCI7czozOiLh
grAiO3M6Mzoi4rSRIjtzOjM6IuGCsSI7czozOiLitJIiO3M6Mzoi4YKyIjtzOjM6IuK0kyI7czoz
OiLhgrMiO3M6Mzoi4rSUIjtzOjM6IuGCtCI7czozOiLitJUiO3M6Mzoi4YK1IjtzOjM6IuK0liI7
czozOiLhgrYiO3M6Mzoi4rSXIjtzOjM6IuGCtyI7czozOiLitJgiO3M6Mzoi4YK4IjtzOjM6IuK0
mSI7czozOiLhgrkiO3M6Mzoi4rSaIjtzOjM6IuGCuiI7czozOiLitJsiO3M6Mzoi4YK7IjtzOjM6
IuK0nCI7czozOiLhgrwiO3M6Mzoi4rSdIjtzOjM6IuGCvSI7czozOiLitJ4iO3M6Mzoi4YK+Ijtz
OjM6IuK0nyI7czozOiLhgr8iO3M6Mzoi4rSgIjtzOjM6IuGDgCI7czozOiLitKEiO3M6Mzoi4YOB
IjtzOjM6IuK0oiI7czozOiLhg4IiO3M6Mzoi4rSjIjtzOjM6IuGDgyI7czozOiLitKQiO3M6Mzoi
4YOEIjtzOjM6IuK0pSI7czozOiLhg4UiO3M6Mzoi4rSnIjtzOjM6IuGDhyI7czozOiLitK0iO3M6
Mzoi4YONIjtzOjM6IuqZgSI7czozOiLqmYAiO3M6Mzoi6pmDIjtzOjM6IuqZgiI7czozOiLqmYUi
O3M6Mzoi6pmEIjtzOjM6IuqZhyI7czozOiLqmYYiO3M6Mzoi6pmJIjtzOjM6IuqZiCI7czozOiLq
mYsiO3M6Mzoi6pmKIjtzOjM6IuqZjSI7czozOiLqmYwiO3M6Mzoi6pmPIjtzOjM6IuqZjiI7czoz
OiLqmZEiO3M6Mzoi6pmQIjtzOjM6IuqZkyI7czozOiLqmZIiO3M6Mzoi6pmVIjtzOjM6IuqZlCI7
czozOiLqmZciO3M6Mzoi6pmWIjtzOjM6IuqZmSI7czozOiLqmZgiO3M6Mzoi6pmbIjtzOjM6IuqZ
miI7czozOiLqmZ0iO3M6Mzoi6pmcIjtzOjM6IuqZnyI7czozOiLqmZ4iO3M6Mzoi6pmhIjtzOjM6
IuqZoCI7czozOiLqmaMiO3M6Mzoi6pmiIjtzOjM6IuqZpSI7czozOiLqmaQiO3M6Mzoi6pmnIjtz
OjM6IuqZpiI7czozOiLqmakiO3M6Mzoi6pmoIjtzOjM6IuqZqyI7czozOiLqmaoiO3M6Mzoi6pmt
IjtzOjM6IuqZrCI7czozOiLqmoEiO3M6Mzoi6pqAIjtzOjM6IuqagyI7czozOiLqmoIiO3M6Mzoi
6pqFIjtzOjM6IuqahCI7czozOiLqmociO3M6Mzoi6pqGIjtzOjM6IuqaiSI7czozOiLqmogiO3M6
Mzoi6pqLIjtzOjM6IuqaiiI7czozOiLqmo0iO3M6Mzoi6pqMIjtzOjM6IuqajyI7czozOiLqmo4i
O3M6Mzoi6pqRIjtzOjM6IuqakCI7czozOiLqmpMiO3M6Mzoi6pqSIjtzOjM6IuqalSI7czozOiLq
mpQiO3M6Mzoi6pqXIjtzOjM6IuqaliI7czozOiLqnKMiO3M6Mzoi6pyiIjtzOjM6IuqcpSI7czoz
OiLqnKQiO3M6Mzoi6pynIjtzOjM6IuqcpiI7czozOiLqnKkiO3M6Mzoi6pyoIjtzOjM6IuqcqyI7
czozOiLqnKoiO3M6Mzoi6pytIjtzOjM6IuqcrCI7czozOiLqnK8iO3M6Mzoi6pyuIjtzOjM6Iuqc
syI7czozOiLqnLIiO3M6Mzoi6py1IjtzOjM6IuqctCI7czozOiLqnLciO3M6Mzoi6py2IjtzOjM6
IuqcuSI7czozOiLqnLgiO3M6Mzoi6py7IjtzOjM6IuqcuiI7czozOiLqnL0iO3M6Mzoi6py8Ijtz
OjM6IuqcvyI7czozOiLqnL4iO3M6Mzoi6p2BIjtzOjM6IuqdgCI7czozOiLqnYMiO3M6Mzoi6p2C
IjtzOjM6IuqdhSI7czozOiLqnYQiO3M6Mzoi6p2HIjtzOjM6IuqdhiI7czozOiLqnYkiO3M6Mzoi
6p2IIjtzOjM6IuqdiyI7czozOiLqnYoiO3M6Mzoi6p2NIjtzOjM6IuqdjCI7czozOiLqnY8iO3M6
Mzoi6p2OIjtzOjM6IuqdkSI7czozOiLqnZAiO3M6Mzoi6p2TIjtzOjM6IuqdkiI7czozOiLqnZUi
O3M6Mzoi6p2UIjtzOjM6IuqdlyI7czozOiLqnZYiO3M6Mzoi6p2ZIjtzOjM6IuqdmCI7czozOiLq
nZsiO3M6Mzoi6p2aIjtzOjM6IuqdnSI7czozOiLqnZwiO3M6Mzoi6p2fIjtzOjM6IuqdniI7czoz
OiLqnaEiO3M6Mzoi6p2gIjtzOjM6IuqdoyI7czozOiLqnaIiO3M6Mzoi6p2lIjtzOjM6IuqdpCI7
czozOiLqnaciO3M6Mzoi6p2mIjtzOjM6IuqdqSI7czozOiLqnagiO3M6Mzoi6p2rIjtzOjM6Iuqd
qiI7czozOiLqna0iO3M6Mzoi6p2sIjtzOjM6IuqdryI7czozOiLqna4iO3M6Mzoi6p26IjtzOjM6
IuqduSI7czozOiLqnbwiO3M6Mzoi6p27IjtzOjM6IuqdvyI7czozOiLqnb4iO3M6Mzoi6p6BIjtz
OjM6IuqegCI7czozOiLqnoMiO3M6Mzoi6p6CIjtzOjM6IuqehSI7czozOiLqnoQiO3M6Mzoi6p6H
IjtzOjM6IuqehiI7czozOiLqnowiO3M6Mzoi6p6LIjtzOjM6IuqekSI7czozOiLqnpAiO3M6Mzoi
6p6TIjtzOjM6IuqekiI7czozOiLqnqEiO3M6Mzoi6p6gIjtzOjM6IuqeoyI7czozOiLqnqIiO3M6
Mzoi6p6lIjtzOjM6IuqepCI7czozOiLqnqciO3M6Mzoi6p6mIjtzOjM6IuqeqSI7czozOiLqnqgi
O3M6Mzoi772BIjtzOjM6Iu+8oSI7czozOiLvvYIiO3M6Mzoi77yiIjtzOjM6Iu+9gyI7czozOiLv
vKMiO3M6Mzoi772EIjtzOjM6Iu+8pCI7czozOiLvvYUiO3M6Mzoi77ylIjtzOjM6Iu+9hiI7czoz
OiLvvKYiO3M6Mzoi772HIjtzOjM6Iu+8pyI7czozOiLvvYgiO3M6Mzoi77yoIjtzOjM6Iu+9iSI7
czozOiLvvKkiO3M6Mzoi772KIjtzOjM6Iu+8qiI7czozOiLvvYsiO3M6Mzoi77yrIjtzOjM6Iu+9
jCI7czozOiLvvKwiO3M6Mzoi772NIjtzOjM6Iu+8rSI7czozOiLvvY4iO3M6Mzoi77yuIjtzOjM6
Iu+9jyI7czozOiLvvK8iO3M6Mzoi772QIjtzOjM6Iu+8sCI7czozOiLvvZEiO3M6Mzoi77yxIjtz
OjM6Iu+9kiI7czozOiLvvLIiO3M6Mzoi772TIjtzOjM6Iu+8syI7czozOiLvvZQiO3M6Mzoi77y0
IjtzOjM6Iu+9lSI7czozOiLvvLUiO3M6Mzoi772WIjtzOjM6Iu+8tiI7czozOiLvvZciO3M6Mzoi
77y3IjtzOjM6Iu+9mCI7czozOiLvvLgiO3M6Mzoi772ZIjtzOjM6Iu+8uSI7czozOiLvvZoiO3M6
Mzoi77y6IjtzOjQ6IvCQkKgiO3M6NDoi8JCQgCI7czo0OiLwkJCpIjtzOjQ6IvCQkIEiO3M6NDoi
8JCQqiI7czo0OiLwkJCCIjtzOjQ6IvCQkKsiO3M6NDoi8JCQgyI7czo0OiLwkJCsIjtzOjQ6IvCQ
kIQiO3M6NDoi8JCQrSI7czo0OiLwkJCFIjtzOjQ6IvCQkK4iO3M6NDoi8JCQhiI7czo0OiLwkJCv
IjtzOjQ6IvCQkIciO3M6NDoi8JCQsCI7czo0OiLwkJCIIjtzOjQ6IvCQkLEiO3M6NDoi8JCQiSI7
czo0OiLwkJCyIjtzOjQ6IvCQkIoiO3M6NDoi8JCQsyI7czo0OiLwkJCLIjtzOjQ6IvCQkLQiO3M6
NDoi8JCQjCI7czo0OiLwkJC1IjtzOjQ6IvCQkI0iO3M6NDoi8JCQtiI7czo0OiLwkJCOIjtzOjQ6
IvCQkLciO3M6NDoi8JCQjyI7czo0OiLwkJC4IjtzOjQ6IvCQkJAiO3M6NDoi8JCQuSI7czo0OiLw
kJCRIjtzOjQ6IvCQkLoiO3M6NDoi8JCQkiI7czo0OiLwkJC7IjtzOjQ6IvCQkJMiO3M6NDoi8JCQ
vCI7czo0OiLwkJCUIjtzOjQ6IvCQkL0iO3M6NDoi8JCQlSI7czo0OiLwkJC+IjtzOjQ6IvCQkJYi
O3M6NDoi8JCQvyI7czo0OiLwkJCXIjtzOjQ6IvCQkYAiO3M6NDoi8JCQmCI7czo0OiLwkJGBIjtz
OjQ6IvCQkJkiO3M6NDoi8JCRgiI7czo0OiLwkJCaIjtzOjQ6IvCQkYMiO3M6NDoi8JCQmyI7czo0
OiLwkJGEIjtzOjQ6IvCQkJwiO3M6NDoi8JCRhSI7czo0OiLwkJCdIjtzOjQ6IvCQkYYiO3M6NDoi
8JCQniI7czo0OiLwkJGHIjtzOjQ6IvCQkJ8iO3M6NDoi8JCRiCI7czo0OiLwkJCgIjtzOjQ6IvCQ
kYkiO3M6NDoi8JCQoSI7czo0OiLwkJGKIjtzOjQ6IvCQkKIiO3M6NDoi8JCRiyI7czo0OiLwkJCj
IjtzOjQ6IvCQkYwiO3M6NDoi8JCQpCI7czo0OiLwkJGNIjtzOjQ6IvCQkKUiO3M6NDoi8JCRjiI7
czo0OiLwkJCmIjtzOjQ6IvCQkY8iO3M6NDoi8JCQpyI7fQ=='));
		$map = $upper;

		static $ulen_mask = array("\xC0" => 2, "\xD0" => 2, "\xE0" => 3, "\xF0" => 4);

		$i = 0;
		$len = strlen($s);

		while ($i < $len)
		{
			$ulen = $s[$i] < "\x80" ? 1 : $ulen_mask[$s[$i] & "\xF0"];
			$uchr = substr($s, $i, $ulen);
			$i += $ulen;

			if (isset($map[$uchr]))
			{
				$uchr = $map[$uchr];
				$nlen = strlen($uchr);

				if ($nlen == $ulen)
				{
					$nlen = $i;
					do $s[--$nlen] = $uchr[--$ulen];
					while ($ulen);
				}
				else
				{
					$s = substr_replace($s, $uchr, $i - $ulen, $ulen);
					$len += $nlen - $ulen;
					$i   += $nlen - $ulen;
				}
			}
		}

		if (INF === $encoding) return $s;
		else return function_exists('iconv') ? iconv('UTF-8', $encoding, $s) : $s;
	}
}

if (!function_exists('mb_strcut'))
{
	function mb_strcut($str, $start, $length = null, $encoding = '')
	{
		$match = array();
        // use the regex unicode support to separate the UTF-8 characters into an array
        preg_match_all( '/./us', $str, $match );
        $chars = is_null( $length )? array_slice( $match[0], $start ) : array_slice( $match[0], $start, $length );
        return implode( '', $chars );
	}
}

if (!function_exists('mb_detect_encoding'))
{
	function mb_detect_encoding($str, $encoding_list = INF, $strict = false)
	{
		if (INF === $encoding_list) $encoding_list = 'UTF-8';
		else
		{
			if (! is_array($encoding_list)) $encoding_list = array_map('trim', explode(',', $encoding_list));
			$encoding_list = array_map('strtoupper', $encoding_list);
		}

		foreach ($encoding_list as $enc)
		{
			switch ($enc)
			{
				case 'ASCII':
					if (! preg_match('/[\x80-\xFF]/', $str)) return $enc;
					break;

				case 'UTF8':
				case 'UTF-8':
					if (preg_match('//u', $str)) return $enc;
					break;

				default:
					return strncmp($enc, 'ISO-8859-', 9) ? false : $enc;
			}
		}

		return false;
	}
}

if (!function_exists('mb_check_encoding'))
{
	function mb_check_encoding($var = INF, $encoding = INF)
	{
		if (INF === $encoding)
		{
			if (INF === $var) return false;
			$encoding = 'UTF-8';
		}

		return false !== mb_detect_encoding($var, array($encoding), true);
	}
}
