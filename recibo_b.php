<?php
// ConexiÃ³n MySQL
$host = "localhost";
$user = "root";
$pass = "";
$db   = "colegio";



$recibo="000";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recibo de Pago</title>
    <style>
        .ms-subtle2-1110-main {
	border-left: .75pt solid black;
	border-right: .75pt solid black;
	border-top-style: none;
	border-bottom-style: none;
}
.ms-subtle2-1110-left {
	font-weight: normal;
	border-left-style: none;
	border-right: 1.5pt solid black;
	border-top-style: none;
	border-bottom-style: none;
}
.ms-subtle2-1110-even {
	font-weight: normal;
	border-style: none;
}
.ms-subtle2-main {
	border-left: .75pt solid black;
	border-right: .75pt solid black;
	border-top-style: none;
	border-bottom-style: none;
}
.ms-subtle2-left {
	font-weight: normal;
	color: black;
	border-left-style: none;
	border-right: 1.5pt solid black;
	border-top-style: none;
	border-bottom-style: none;
	background-color: #DDE6DD;
}
.ms-subtle2-even {
	font-weight: normal;
	color: black;
	border-style: none;
	background-color: white;
}
.ms-simple1-1101-left {
	border-style: none;
}
.ms-simple1-1101-even {
	border-style: none;
}
        body { font-family: Arial, sans-serif; margin: 20px; }
        .recibo { border: 2px solid #000; padding: 20px; width: 600px; }
        h2 { text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        td { padding: 5px; vertical-align: top; }
        .bold { font-weight: bold; }
        .footer { font-size: 12px; margin-top: 20px; text-align: justify; }
    .auto-style3 {
	font-family: Calibri;
}
.auto-style4 {
	font-size: xx-small;
}
.auto-style5 {
	font-size: medium;
}
.auto-style6 {
	color: #FF0000;
}
.auto-style8 {
	border-left-style: solid;
	border-left-color: #FF0000;
	border-right-style: solid;
	border-right-color: #FF0000;
	border-top: 1.5pt solid #FF0000;
	border-bottom: 1.5pt solid #FF0000;
}
.auto-style10 {
	font-size: xx-small;
	font-family: "Calibri Light";
}
.auto-style17 {
	text-align: center;
	border-style: none;
}
.auto-style18 {
	text-align: center;
	font-family: Calibri;
	border-style: none;
	background-color: #DDE6DD;
}
.auto-style19 {
	text-align: center;
}
.auto-style20 {
	margin-left: 0px;
}
.auto-style21 {
	font-size: 5pt;
}
.auto-style22 {
	font-family: "Microsoft Sans Serif";
	font-size: 5pt;
}
.auto-style25 {
	text-align: right;
}
.auto-style30 {
	font-weight: normal;
	text-align: right;
	border-left-style: none;
	border-right: 1.5pt solid black;
	border-top-style: none;
	border-bottom-style: none;
	background-color: #DDE6DD;
}
.auto-style31 {
	font-weight: normal;
	border-style: none;
	background-color: #DDE6DD;
}
.auto-style33 {
	font-weight: normal;
	color: black;
	font-size: x-small;
	text-align: right;
	border-style: none;
	background-color: #DDE6DD;
}
.auto-style34 {
	font-size: x-small;
}
.auto-style35 {
	border-left: .75pt solid #FF0000;
	border-right: .75pt solid #FF0000;
	border-top-style: solid;
	border-top-color: #FF0000;
	border-bottom-style: solid;
	border-bottom-color: #FF0000;
}
.auto-style36 {
	font-weight: normal;
	color: black;
	font-family: Calibri;
	border-left-style: none;
	border-right: 1.5pt solid black;
	border-top-style: none;
	border-bottom-style: none;
	background-color: #DDE6DD;
}
.auto-style37 {
	font-size: xx-small;
	text-align: left;
}
.auto-style38 {
	text-align: center;
	font-family: Calibri;
}
.auto-style39 {
	line-height: 103%;
	font-size: xx-small;
	font-family: "Arial MT", sans-serif;
	margin: 0cm;
}
    .auto-style40 {
	text-align: center;
	border-style: none;
	background-color: #DDE6DD;
}
    </style>
</head>
<body>
<div class="recibo" style="width: 1107px">
    <span class="auto-style3">
    <table class="auto-style8" style="width: 110%">
        <!-- fpstyle: 1,011010100 -->
        <tr><td class="ms-simple1-1101-left" rowspan="4" style="width: 193px">
			<img alt="Logo" height="152" src="Logo.png" width="191"></td>
			<td class="ms-simple1-1101-even" colspan="3" style="height: 34px">
			<b style="mso-bidi-font-weight:normal">
			<span class="auto-style5" lang="ES" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Calibri&quot;,sans-serif; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; position: relative; top: -1.0pt; mso-text-raise: 1.0pt; mso-font-width: 105%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
			COLEGIOS<span style="letter-spacing:2.0pt"> </span>LOWRY<span class="auto-style3"><span lang="es-mx"><span class="auto-style4" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Calibri&quot;,sans-serif; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 105%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</span></span>
			<span class="auto-style4" lang="ES" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Calibri&quot;,sans-serif; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 105%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
			KINDER<span style="letter-spacing:-.2pt"> </span>
			<span style="color:red">* </span>PRIMARIA<span style="letter-spacing:-.5pt">
			</span><span style="color:red">* </span>JUNIOR<span style="letter-spacing:-.2pt">
			</span>HIGH<span style="letter-spacing:2.0pt"> </span></span></span>
			</span></b></td>
			<td class="ms-simple1-1101-even" style="height: 34px; width: 228px">
			&nbsp;</td>
			<td class="auto-style17" rowspan="2" style="width: 268435456px">
			<img alt="SAT" height="152" src="CedulaSAT.png" width="164"></td></tr>
        <tr><td class="ms-simple1-1101-even" colspan="4" style="height: 12px">
			<h1 class="auto-style19">
			<span class="auto-style10" lang="ES" style="mso-bidi-font-size: 11.0pt; line-height: 103%; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 105%">
			AV. MAYAPAN MZA 4<span style="letter-spacing:1.65pt"> </span>LT<span style="letter-spacing:1.5pt">
			</span>8-01<span style="letter-spacing:2.0pt"> </span>SM<span style="letter-spacing:1.9pt">
			</span>21<span style="letter-spacing:1.8pt"> </span>C.P.<span style="letter-spacing:1.3pt">
			</span>77500<span style="letter-spacing:2.0pt"> </span>MPIO<span style="letter-spacing:2.0pt">
			</span>BENITO<span style="letter-spacing:1.9pt"> </span>JUÁREZ<span style="letter-spacing:2.0pt">
			</span>CANCÚN, QUINTANA<span style="letter-spacing:
1.95pt"> </span>ROO<span style="letter-spacing:2.0pt"> </span>R.F.C. 
			CYO080401K9A</span><span lang="ES" style="font-size:5.0pt;mso-bidi-font-size:
11.0pt;line-height:103%;font-family:&quot;Calibri&quot;,sans-serif;mso-bidi-font-family:
&quot;Arial MT&quot;"><o:p></o:p></span></h1>
			</td></tr>
        <tr><td class="auto-style40" style="width: 149px">
			<h5><span lang="es-mx"><span class="auto-style6">*</span>Fecha</span></h5>
			</td><td class="auto-style40" style="width: 149px">
			<h5 class="auto-style3"><span lang="es-mx">
			<span class="auto-style6">*</span>Concepto</span></h5>
			</td><span class="auto-style3">
			<td class="auto-style18" style="width: 104px">
			<h5><span lang="es-mx"><span class="auto-style6">*</span>Miembro</span></h5>
			</td><td class="auto-style18" style="width: 228px">
			<h5><span lang="es-mx"><span class="auto-style6">*</span>Folio</span></h5>
			</td></span>
			<td class="auto-style17" rowspan="2" style="width: 268435456px">
			<p align="center" class="MsoNormal">
			<span class="auto-style21" lang="ES" style="mso-bidi-font-size: 11.0pt; line-height: 103%; font-family: &quot;Microsoft Sans Serif&quot;,sans-serif; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 110%">
			EXENTO<span style="letter-spacing:-.35pt"> </span>DE<span style="letter-spacing:-.35pt">
			</span>IVA<span style="letter-spacing:-.1pt"> </span>SEGÚN<span style="letter-spacing:-.35pt">
			</span>ART.<span style="letter-spacing:2.0pt"> </span>15 FRACC IV<span style="letter-spacing:1.0pt">
			</span>PAGO<span style="letter-spacing:
-.15pt"> </span>EN UNA<span style="letter-spacing:2.0pt"> </span>SOLA<span style="letter-spacing:-.25pt">
			</span>EXHIBICIÓN EFECTOS<span style="letter-spacing:
2.0pt"> </span>FISCALES<span style="letter-spacing:-.35pt"> </span>ALPAGO</span><o:p></o:p></p>
			<p align="center" class="auto-style21">
			<o:p>
			<span class="auto-style22" lang="ES" style="mso-bidi-font-size: 11.0pt; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 110%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
			SÓLO SERÁ VÁLIDO COMO<span style="letter-spacing:2.0pt"> </span>
			RECIBO SI MUESTRA<span style="letter-spacing:
1.95pt"> </span>LAS<span style="letter-spacing:2.0pt"> </span>CANTIDADES<span style="letter-spacing:-.35pt">
			</span>IMPRESAS<span style="letter-spacing:-.3pt"> </span>Y<span style="letter-spacing:-.35pt">
			</span>EL<span style="letter-spacing:
2.0pt"> </span>SELLO DEL INSTITUTO</span></o:p></p>
			</td></tr>
        <tr><td style="width: 149">&nbsp;</td>
			<td class="ms-simple1-1101-even" style="width: 149px">&nbsp;</td>
			<td class="ms-simple1-1101-even" style="width: 104px">&nbsp;</td>
			<td class="ms-simple1-1101-even" style="width: 228px">&nbsp;</td></tr>
        </table>

    <table class="auto-style35" style="width: 110%">
        <!-- fpstyle: 38,011100100 -->
        <tr><td class="auto-style30" style="height: 15; width: 152">
			<h5><span lang="es-mx"><span class="auto-style6">*</span>Nombre</span></h5>
			<span class="auto-style3">
			<h5><span lang="es-mx"><span class="auto-style6">*</span>Direccion</span></h5>
			</span></td>
			<td class="ms-subtle2-1110-even" style="width: 149px; height: 15px"></td>
			<td class="ms-subtle2-1110-even" style="height: 15px"></td>
			<td class="ms-subtle2-1110-even" style="height: 15px; width: 121px"></td>
			<td class="ms-subtle2-1110-even" style="height: 15px"></td>
			<td class="auto-style31" style="height: 15; width: 69">
			<h5 class="auto-style25" style="width: 81px"><span lang="es-mx">
			<span class="auto-style6">*</span>Tipo</span></h5>
			</td><td class="ms-subtle2-1110-even" style="height: 15px"></td>
			<td class="ms-subtle2-1110-even" style="height: 15px; width: 95px">
			<p align="center" class="auto-style20" style="width: 273px">
			<span class="auto-style22" lang="ES" style="mso-bidi-font-size: 11.0pt; line-height: 103%; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 110%">
			ESTUDIOS<span style="letter-spacing:-.35pt"> </span>CON<span style="letter-spacing:2.0pt">
			</span>RECONOCIMIENTO<span style="letter-spacing:-.35pt"> </span>DE<span style="letter-spacing:-.35pt">
			</span>VALIDEZ<span style="letter-spacing:2.0pt"> </span>
			<span style="letter-spacing:-.1pt">OFICIAL</span><span style="letter-spacing:-.25pt">
			</span><span style="letter-spacing:-.1pt">SEGÚN</span><span style="letter-spacing:.2pt">
			</span><span style="letter-spacing:-.1pt">ACUERDO</span><span style="letter-spacing:.55pt">
			</span><span style="letter-spacing:-.25pt">CON</span></span><o:p></o:p></p>
			<p align="center" class="MsoNormal" style="width: 272px; height: 6px">
			<span class="auto-style21" lang="ES" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Microsoft Sans Serif&quot;,sans-serif; mso-hansi-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 110%">
			LA<span style="letter-spacing:-.35pt"> </span>S.E.P.<span style="letter-spacing:-.5pt">
			</span>NO.<span style="letter-spacing:-.35pt"> </span>EN<span style="letter-spacing:-.3pt">
			</span><span style="letter-spacing:-.1pt">TRAMITE</span></span><span lang="ES" style="font-size:4.5pt;mso-bidi-font-size:11.0pt;font-family:&quot;Microsoft Sans Serif&quot;,sans-serif;
mso-hansi-font-family:&quot;Arial MT&quot;;mso-bidi-font-family:&quot;Arial MT&quot;"><o:p></o:p></span></p>
			<p align="center" class="MsoNormal" style="width: 263px">
			<span class="auto-style21" lang="ES" style="mso-bidi-font-size: 11.0pt; line-height: 102%; font-family: &quot;Calibri&quot;,sans-serif; mso-hansi-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 110%">
			*NO<span style="letter-spacing:
.45pt"> </span>HAY<span style="letter-spacing:.55pt"> </span>DEVOLUCIONES<span style="letter-spacing:.6pt">
			</span>EN<span style="letter-spacing:2.0pt"> </span>
			<span style="letter-spacing:-.1pt">INSCRIPCIONES</span></span><span lang="ES" style="font-size:4.5pt;mso-bidi-font-size:11.0pt;line-height:102%;font-family:
&quot;Calibri&quot;,sans-serif;mso-hansi-font-family:&quot;Arial MT&quot;;mso-bidi-font-family:
&quot;Arial MT&quot;"><o:p></o:p></span></p>
			</td></tr>
        <tr><td class="auto-style30" style="height: 34; width: 152">
			<h5 class="auto-style25"><span lang="es-mx">
			<span class="auto-style6">*</span>Fecha de iniciacion</span></h5>
			</td>
			<td class="ms-subtle2-1110-even" colspan="6" style="height: 34px"></td>
			<td class="ms-subtle2-1110-even" style="width: 95px; height: 34px"></td></tr>
        </table>

    <div class="footer">
        <span class="auto-style3">
    <table class="auto-style35" style="width: 110%; height: 145">
        <!-- fpstyle: 38,011110100 -->
        <tr><td class="auto-style36" style="width: 154; height: 38px">
			<h5 class="auto-style25"><span lang="es-mx">
			<span class="auto-style6">*</span>Concepto</span></h5>
			</td><td class="ms-subtle2-even" style="width: 149; height: 38px"></td>
			<td class="ms-subtle2-even" style="height: 38px"></td>
			<td class="ms-subtle2-even" style="height: 38px; width: 183px"></td>
			<td class="auto-style33" style="height: 38px; width: 123px">
			<span class="auto-style34" lang="es-mx"><strong><span lang="es-mx">
			<span class="auto-style3"><span class="auto-style6">*</span></span></span>Total 
			pagado</strong></span></td>
			<td class="ms-subtle2-even" style="height: 38px"></td>
			<td class="ms-subtle2-even" style="height: 38px"></td></tr>
        <tr><td class="ms-subtle2-left" style="height: 37px; width: 154">
			<h5 class="auto-style25"><span lang="es-mx">
			<span class="auto-style6">*</span>Ingreso</span></h5>
			</td><td class="ms-subtle2-even" style="width: 149px; height: 37px">
			&nbsp;</td><td class="ms-subtle2-even" style="height: 37px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 37px; width: 183px">&nbsp;</td>
			<td class="auto-style33" style="height: 37px; width: 123px">
			<span class="auto-style34" lang="es-mx"><strong><span lang="es-mx">
			<span class="auto-style3"><span class="auto-style6">*</span></span></span>Saldo</strong></span></td>
			<td class="ms-subtle2-even" style="height: 37px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 37px">&nbsp;</td></tr>
        <tr><td class="ms-subtle2-left" style="height: 37px; width: 154">
			<h5 class="auto-style25"><span lang="es-mx">
			<span class="auto-style6">*</span>Cuota</span></h5>
			</td><td class="ms-subtle2-even" style="width: 149px; height: 37px">
			&nbsp;</td><td class="ms-subtle2-even" style="height: 37px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 37px; width: 183px">&nbsp;</td>
			<td class="auto-style33" style="height: 37px; width: 123px">
			<span class="auto-style34" lang="es-mx"><strong><span lang="es-mx">
			<span class="auto-style3"><span class="auto-style6">*</span></span></span>Forma 
			de pago</strong></span></td>
			<td class="ms-subtle2-even" style="height: 37px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 37px">&nbsp;</td></tr>
        <tr><td class="auto-style36" style="width: 154; height: 35px">
			<h5 class="auto-style25"><span lang="es-mx">
			<span class="auto-style6">*</span>Libro</span></h5>
			</td><td class="ms-subtle2-even" style="width: 149px; height: 35px"></td>
			<td class="ms-subtle2-even" style="height: 35px"></td>
			<td class="ms-subtle2-even" style="height: 35px; width: 183px"></td>
			<td class="ms-subtle2-even" style="height: 35px; width: 123px"></td>
			<td class="ms-subtle2-even" style="height: 35px"></td>
			<td class="ms-subtle2-even" style="height: 35px"></td></tr>
        <tr><td class="auto-style36" style="width: 154; height: 35px">
			<h5 class="auto-style25"><span lang="es-mx">
			<span class="auto-style6">*</span>Importe Con Letra</span></h5>
			</td><td class="ms-subtle2-even" style="width: 149px; height: 35px">
			&nbsp;</td><td class="ms-subtle2-even" style="height: 35px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 35px; width: 183px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 35px; width: 123px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 35px">&nbsp;</td>
			<td class="ms-subtle2-even" style="height: 35px">&nbsp;</td></tr>
        </table>

    	</span>
		<table style="width: 110%">
			<tr>
				<td class="auto-style37" colspan="3" rowspan="3">
				<span lang="es-mx"><br>POR MEDIO DEL PRESENTE DOCUMENTO SOLIITO 
				SER ACEPTADO COMO MIEMBRO DE ESTE INSTITUTO DE ACUERDO CON EL 
				ARTICULO 4 DE SU REGLAMENTO INTERIOR. RECONOZCO ESTAR 
				DEBIDAMENTE ENTERADO <br>DE DICHO REGLAMENTO Y ESTOY DE ACUERDO 
				CON SU APLICACION ASI MISMO, HE LEIDO Y ACEPTADO LAS<br>&nbsp;DISPOSICIONES 
				QUE SE ESPECIFICAN AL REVERSO.</span></td>
				<td style="width: 159px; height: 14px"></td>
				<td style="height: 14px"></td>
				<td style="height: 14px; width: 120px"></td>
				<td style="height: 14px"></td>
				<td style="height: 14px"></td>
			</tr>
			<tr>
				<td class="auto-style19" colspan="2" style="height: 23px">
				<b style="mso-bidi-font-weight:normal">
				<span lang="ES" style="font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
mso-fareast-font-family:&quot;Arial MT&quot;;mso-hansi-font-family:&quot;Arial MT&quot;;mso-bidi-font-family:
&quot;Arial MT&quot;;color:red;mso-ansi-language:ES;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA">*</span><span lang="ES" style="font-size:6.0pt;
mso-bidi-font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:
&quot;Arial MT&quot;;mso-hansi-font-family:&quot;Arial MT&quot;;mso-bidi-font-family:&quot;Arial MT&quot;;
mso-ansi-language:ES;mso-fareast-language:EN-US;mso-bidi-language:AR-SA">CONSEJO<span style="letter-spacing:.9pt">
				</span><span style="letter-spacing:-.1pt">DIRECTIVO</span></span></b></td>
				<td style="height: 23px; width: 120px"></td>
				<td colspan="2" style="height: 23px">
				<p class="auto-style19">
				<b style="mso-bidi-font-weight:
normal"><span lang="ES" style="font-size:6.0pt;mso-bidi-font-size:11.0pt;
font-family:&quot;Arial&quot;,sans-serif;mso-hansi-font-family:&quot;Arial MT&quot;;mso-bidi-font-family:
&quot;Arial MT&quot;;color:red">*</span></b><b style="mso-bidi-font-weight:normal"><span lang="ES" style="font-size:6.0pt;mso-bidi-font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;
mso-hansi-font-family:&quot;Arial MT&quot;;mso-bidi-font-family:&quot;Arial MT&quot;">FIRMA<span style="letter-spacing:-.1pt">
				</span>DEL<span style="letter-spacing:.1pt"> </span>
				<span style="letter-spacing:-.1pt">SOLICITANTE</span><o:p></o:p></span></b></p>
				</td>
			</tr>
			<tr>
				<td class="auto-style19" colspan="2">
				<span class="auto-style6" lang="es-mx">____________________</span></td>
				<td style="width: 120px"></td>
				<td class="auto-style38" colspan="2">
				<span class="auto-style6" lang="es-mx">____________________</span></td>
			</tr>
			<tr>
				<td style="height: 34px; width: 93px"></td>
				<td style="height: 34px; width: 208px"></td>
				<td style="height: 34px; width: 288px"></td>
				<td style="height: 34px; width: 159px"></td>
				<td style="height: 34px"></td>
				<td style="height: 34px; width: 120px"></td>
				<td style="height: 34px"></td>
				<td style="height: 34px"></td>
			</tr>
			<tr>
				<td colspan="8">
				<p class="auto-style39" style="text-autospace: none;">
				<b style="mso-bidi-font-weight:normal">
				<span lang="ES" style="font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-family:&quot;Arial MT&quot;">FAVOR<span style="letter-spacing:-.6pt">
				</span>DE<span style="letter-spacing:-.65pt"> </span>LEER<span style="letter-spacing:-.65pt">
				</span>CON<span style="letter-spacing:-.5pt"> </span>CUIDADO<span style="letter-spacing:-.55pt">
				</span>LAS<span style="letter-spacing:-.4pt"> </span>SIGUIENTES<span style="letter-spacing:-.55pt">
				</span>DISPOSICIONES</span></b><span lang="ES">:<span style="letter-spacing:-.35pt">
				</span>1.-La<span style="letter-spacing:-.35pt"> </span>cuota<span style="letter-spacing:-.35pt">
				</span>correspondiente<span style="letter-spacing:-.35pt">
				</span>a<span style="letter-spacing:-.35pt"> </span>la<span style="letter-spacing:-.35pt">
				</span>mensualidad<span style="letter-spacing:
-.35pt"> </span>no<span style="letter-spacing:-.35pt"> </span>será<span style="letter-spacing:-.35pt">
				</span>devuelta<span style="letter-spacing:-.35pt"> </span>por<span style="letter-spacing:-.35pt">
				</span>motivo<span style="letter-spacing:-.35pt"> </span>alguno<span style="letter-spacing:-.35pt">
				</span>salvo<span style="letter-spacing:-.35pt"> </span>en<span style="letter-spacing:-.35pt">
				</span>lo<span style="letter-spacing:2.0pt"> </span>dispuesto<span style="letter-spacing:.4pt">
				</span>en<span style="letter-spacing:.2pt"> </span>el<span style="letter-spacing:.2pt">
				</span>artículo 5<span style="letter-spacing:.15pt"> </span>to.,<span style="letter-spacing:-.1pt">
				</span>fracción IV<span style="letter-spacing:-.45pt"> </span>
				del<span style="letter-spacing:.2pt"> </span>acuerdo<span style="letter-spacing:.2pt">
				</span>publicado<span style="letter-spacing:.35pt"> </span>en<span style="letter-spacing:.2pt">
				</span>el<span style="letter-spacing:
.2pt"> </span>Diario<span style="letter-spacing:.2pt"> </span>Oficial del<span style="letter-spacing:.2pt">
				</span>10<span style="letter-spacing:.2pt"> </span>de<span style="letter-spacing:.2pt">
				</span>marzo de<span style="letter-spacing:.2pt"> </span>1992.<span style="letter-spacing:.15pt">
				</span>2.- Una<span style="letter-spacing:.2pt"> </span>vez<span style="letter-spacing:-.45pt">
				</span>iniciadas<span style="letter-spacing:
.4pt"> </span>las<span style="letter-spacing:.45pt"> </span>clases,<span style="letter-spacing:.4pt">
				</span>el<span style="letter-spacing:.2pt"> </span>costo<span style="letter-spacing:.2pt">
				</span>de<span style="letter-spacing:2.0pt"> </span>Inscripción 
				y/o<span style="letter-spacing:-.3pt"> </span>Reinscripción
				</span><b style="mso-bidi-font-weight:normal">
				<span lang="ES" style="font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-family:&quot;Arial MT&quot;">NO<span style="letter-spacing:-.35pt">
				</span>SERA<span style="letter-spacing:-.45pt"> </span>
				REEMBOLSABLE</span></b><span lang="ES">,<span style="letter-spacing:-.2pt">
				</span>en el caso que las clases no se<span style="letter-spacing:.45pt">
				</span>hayan iniciado se<span style="letter-spacing:
.45pt"> </span>cobrara el 20% de penalización por concepto de<span style="letter-spacing:2.0pt">
				</span>gastos administrativos. 3.- En caso que se requiera 
				devolución del pago del Combo Escolar (material Escolar),se 
				cobrara una penalización de hasta el 100%<span style="letter-spacing:2.0pt">
				</span>(dependiendo<span style="letter-spacing:.4pt"> </span>de 
				la fecha de lasolicitud).<span style="letter-spacing:.4pt">
				</span>4.- Los<span style="letter-spacing:.5pt"> </span>padres<span style="letter-spacing:.45pt">
				</span>de Familia<span style="letter-spacing:
.4pt"> </span>están<span style="letter-spacing:.4pt"> </span>obligados<span style="letter-spacing:.45pt">
				</span>a cubrir las<span style="letter-spacing:
.5pt"> </span>cuotas mensuales<span style="letter-spacing:.55pt"> </span>de 
				colegiaturas<span style="letter-spacing:.4pt"> </span>de sus<span style="letter-spacing:.7pt">
				</span>hijos<span style="letter-spacing:.5pt"> </span>
				puntualmente,<span style="letter-spacing:.4pt"> </span>en<span style="letter-spacing:2.0pt">
				</span>los primeros </span>
				<b style="mso-bidi-font-weight:normal">
				<span lang="ES" style="font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-family:&quot;Arial MT&quot;">
				cinco días naturales de cada mes</span></b><span lang="ES">,<span style="letter-spacing:
-.1pt"> </span>en caso de ser inhábil el día 5, el pago deberá realizarse el día 
				hábil anterior. 5.-Para realizar cualquier tipo de<span style="letter-spacing:
2.0pt"> </span>trámite<span style="letter-spacing:.5pt"> </span>con<span style="letter-spacing:.5pt">
				</span>respecto<span style="letter-spacing:.55pt"> </span>a<span style="letter-spacing:.5pt">
				</span>una<span style="letter-spacing:
.55pt"> </span>cancelación,<span style="letter-spacing:.55pt"> </span>es<span style="letter-spacing:.85pt">
				</span>indispensable<span style="letter-spacing:
.8pt"> </span>la<span style="letter-spacing:.55pt"> </span>presentación<span style="letter-spacing:.6pt">
				</span>del<span style="letter-spacing:.55pt"> </span>recibo<span style="letter-spacing:.55pt">
				</span>de<span style="letter-spacing:.55pt"> </span>pago<span style="letter-spacing:.6pt">
				</span>correspondiente<span style="letter-spacing:
.6pt"> </span>sellado<span style="letter-spacing:.8pt"> </span>en<span style="letter-spacing:.55pt">
				</span>original<span style="letter-spacing:.6pt"> </span>y<span style="letter-spacing:-.3pt">
				</span>entregado<span style="letter-spacing:.55pt"> </span>al<span style="letter-spacing:.55pt">
				</span>momento<span style="letter-spacing:.8pt"> </span>de<span style="letter-spacing:2.0pt">
				</span>haber<span style="letter-spacing:-.2pt"> </span>realizado<span style="letter-spacing:-.05pt">
				</span>el pago.<span style="letter-spacing:-.05pt"> </span>
				</span><b style="mso-bidi-font-weight:normal">
				<span lang="ES" style="font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-family:&quot;Arial MT&quot;">6.-Para<span style="letter-spacing:-.15pt">
				</span>aclarar cualquier<span style="letter-spacing:-.2pt">
				</span>duda<span style="letter-spacing:
-.2pt"> </span>con<span style="letter-spacing:-.2pt"> </span>respecto a<span style="letter-spacing:-.05pt">
				</span>las<span style="letter-spacing:-.15pt"> </span>
				disposiciones<span style="letter-spacing:-.2pt"> </span>
				anteriores,<span style="letter-spacing:
-.05pt"> </span>favor<span style="letter-spacing:-.2pt"> </span>de<span style="letter-spacing:-.2pt">
				</span>acudir<span style="letter-spacing:-.2pt"> </span>a la<span style="letter-spacing:-.2pt">
				</span>Administración<span style="letter-spacing:-.2pt"> </span>
				del<span style="letter-spacing:-.2pt"> </span>colegio.<o:p></o:p></span></b></p>
				</td>
			</tr>
		</table>
		</span>
    </div>
</div>

</body>
</html>
