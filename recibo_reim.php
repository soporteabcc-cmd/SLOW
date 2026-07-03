<?php

require('conexion.php');

$buscar_alumnos = $_POST['txt_id_poliza'];

$id_poliza_busqueda = $_POST['txt_busqueda_alumnos'];

		$query_busqueda_alumno = "SELECT * FROM `colegiaturas` WHERE id_poliza='".$buscar_alumnos."';";
		$resultado=$mysqli->query($query_busqueda_alumno);
		$row=$resultado->fetch_assoc();

			$ID = ($row["id_alumno"]);
			$nombre = ($row["ciclo"]);
			$fec_nac = ($row["mes"]);
			$monto = ($row["monto"]);
			$id_poliza = ($row["id_poliza"]);
			$fecha_pago = ($row["fecha_pago"]);
			$forma_pago = ($row["forma_pago"]);
			$mes = ($row["mes"]);


		$query_nombre = "SELECT * FROM `alumnos` WHERE ID='".$id_poliza_busqueda."';";
		$resultado=$mysqli->query($query_nombre);
		$row=$resultado->fetch_assoc();

			$nombreCom = ($row["NombreCom"]);
			$domicilio = ($row["Direccion"]);



?>
<html lang="en">

<head>

    <meta charset="utf-8">


<title>Lowry Recibo</title>
<style>
table
{
table-layout:fixed;
overflow-wrap:anywhere;
margin-top:5px;
border-spacing:0;
padding:0;
width:20.0cm;
border:none;
font-size:11pt;
}
td
{
overflow-wrap:anywhere;
margin-top:5px;
border-spacing:0;
padding:0;
border:none;
}
.auto-style2 {
	background-color: #DCDCDC;
}
.auto-style3 {
	text-align: center;
}
.auto-style5 {
	font-size: medium;
}
.auto-style4 {
	font-size: xx-small;
}
.auto-style10 {
	font-size: xx-small;
	font-family: "Calibri Light";
}
.auto-style24 {
	text-align: right;
	border-left-style: solid;
	border-left-color: #DCDCDC;
	border-right-color: #DCDCDC;
	border-top-color: #DCDCDC;
	border-bottom-style: solid;
	border-bottom-color: #DCDCDC;
	font-family: Calibri;
	color: red;
}
.auto-style26 {
	text-align: right;
	border-left-style: solid;
	border-left-color: #DCDCDC;
	border-right-color: #DCDCDC;
	border-top-color: #DCDCDC;
	border-bottom-style: solid;
	border-bottom-color: #DCDCDC;
	background-color: #DCDCDC;
	font-family: Calibri;
	color: red;
}
.auto-style27 {
	background-color: #FFFFFF;
}
.auto-style32 {
	font-weight: normal;
}
.auto-style33 {
	background-color: #DCDCDC;
	text-align: right;
}
.auto-style34 {
	text-align: right;
}
.auto-style36 {
	font-size: 6pt;
	text-align: center;
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	border-bottom: 1px solid #C8C8C8;
}
.auto-style37 {
	font-size: 9pt;
}
.auto-style38 {
	font-size: 8pt;
	text-align: justify;
	font-weight: normal;
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	border-bottom: 1px solid #C8C8C8;
}
.auto-style41 {
	font-weight: bolder;
	color: red;
	text-align: center;
	border-left: 1px solid #C8C8C8;
	border-right: 1px solid #C8C8C8;
	border-top: 1px solid #C8C8C8;
}
.auto-style42 {
	background-color: #DCDCDC;
	text-align: right;
	font-family: Calibri;
	color: #FF0000;
}
.auto-style43 {
	text-align: right;
	color: #FF0000;
	border-left-color: #C8C8C8;
	border-right-color: #C8C8C8;
	background-color: #DCDCDC;
}
.auto-style44 {
	font-family: Calibri;
}
.auto-style45 {
	white-space: normal;
}
.auto-style47 {
	text-align: center;
	font-size: 5pt;
}
.auto-style48 {
	font-size: 6pt;
}
</style>

</head>

<body style='width:20cm;margin:.5cm;font-family:Calibri,sans-serif;'>

<div style='position:absolute;width:20.0cm;height:15.9cm; left: 24px; top: 2px;'>
<table style='width:20.0cm;'>
<tr>
 <td style='width:3.9cm; height: 180px;' class="auto-style3">
	<img alt="Logo" height="152" src="Logo.png" width="171"></td>
<td style='width:11.5cm; height: 180px;' class="auto-style3">
<table style="width:101%;">
 <tr>
 <td style='font-weight:bolder;text-align:center;'>
 <span class="auto-style3"><b style="mso-bidi-font-weight: normal">
 <span class="auto-style5" lang="ES" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Calibri&quot;,sans-serif; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; position: relative; top: -1.0pt; mso-text-raise: 1.0pt; mso-font-width: 105%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
 COLEGIOS<span style="letter-spacing: 2.0pt"> </span>LOWRY<span lang="es-mx"><span class="auto-style4" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Calibri&quot;,sans-serif; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 105%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 </span></span>
 <span class="auto-style4" lang="ES" style="mso-bidi-font-size: 11.0pt; font-family: &quot;Calibri&quot;,sans-serif; mso-fareast-font-family: &quot;Arial MT&quot;; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 105%; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA">
 KINDER<span style="letter-spacing: -.2pt"> </span><span style="color: red">*
 </span>PRIMARIA<span style="letter-spacing: -.5pt"> </span>
 <span style="color: red">* </span>JUNIOR<span style="letter-spacing: -.2pt">
 </span>HIGH<span style="letter-spacing: 2.0pt"> </span></span></span></b>
 </span>
 </td>
 </tr>
 <tr>
 <td class="auto-style3" >
 &nbsp;</td>
 </tr>
 <tr>
 <td class="auto-style3">
 <span class="auto-style3">
 <span class="auto-style10" lang="ES" style="mso-bidi-font-size: 11.0pt; line-height: 103%; mso-bidi-font-family: &quot;Arial MT&quot;; mso-font-width: 105%">
 V. MAYAPAN MZA 4<span style="letter-spacing: 1.65pt"> </span>LT<span style="letter-spacing: 1.5pt">
 </span>8-01<span style="letter-spacing: 2.0pt"> </span>SM<span style="letter-spacing: 1.9pt">
 </span>21<span style="letter-spacing: 1.8pt"> </span>C.P.<span style="letter-spacing: 1.3pt">
 </span>77500<span style="letter-spacing: 2.0pt"> </span>MPIO<span style="letter-spacing: 2.0pt">
 </span>BENITO<span style="letter-spacing: 1.9pt"> </span>JUAREZ<span style="letter-spacing: 2.0pt">
 </span>CANCUN, QUINTANA<span style="letter-spacing: 1.95pt"> </span>ROO<span style="letter-spacing: 2.0pt">
 </span>R.F.C. CYO080401K9A</span><span lang="ES" style="font-size: 5.0pt; mso-bidi-font-size: 11.0pt; line-height: 103%; font-family: &quot;Calibri&quot;,sans-serif; mso-bidi-font-family: &quot;Arial MT&quot;"><o:p><br></o:p>
 </span></span></td>

 </tr>
 </table>
<div class="auto-style47">
	<span class="auto-style48">EXENTO DE IVA SEGUN ART. 15 FRACC IV PAGO EN UNA 
	SOLA EXHIBICION EFECTOS FISCALES ALPAGO OLO SERA VALIDO COMO RECIBO SI 
	MUESTRA LAS CANTIDADES IMPRESAS Y EL SELLO DEL INSTITUTO</span><br><br>
	ESTUDIOS CON RECONOCIMIENTO DE VALIDEZ OFICIAL SEGUN ACUERDO CON<br>LA 
	S.E.P. NO. EN TRAMITE<br>*NO HAY DEVOLUCIONES EN INSCRIPCIONES</div>
</td>
<td style='text-align:center;width:5cm; height: 180px;'>
<table style='border-style: none; border-color: inherit; border-width: medium; width:4.3cm; border-spacing:0; text-align:center; padding:0;'>
	<TR>
	<TD style="border-top-left-radius:10px;border-top-right-radius:10px;" class="auto-style41">
	<img alt="SAT" height="202" src="CedulaSAT.png" width="208"></td>
	</TR>
	</table>
</td>
</tr>
</table>
<table style='border-style: none; border-color: inherit; border-width: medium; margin-top:5px; font-weight:bolder; border-spacing:0; text-align:center; padding:0; width: 20cm;'>
	<TR style="background-color:gainsboro;">
	<td style="border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;border-right:1px solid #C8C8C8;color:blue;font-size:9pt;width:13cm;">
	&nbsp;</td>
	</TR>
	<TR>
	<TD style="border-left:1px solid #C8C8C8;border-right:1px solid #C8C8C8; width: 13cm;">
		<table style="width:19.6cm;">
			<tr>
			<td style='width:2cm; height: 24;' class="auto-style42">
			<span class="auto-style44"><strong>Fecha</strong></td>
			<td style='width:2.7cm; height: 24;' class="auto-style43">
			<strong>Concepto</strong></td>
			<td style='width:3.2cm; height: 24;' class="auto-style43">
			<strong>Miembro</strong></td>
			<td style='width:2.5cm; height: 24;' class="auto-style43">
			<strong>Folio</strong></span></td>
			</tr>
			<tr>
			<td style="height: 24; width: 2cm"><p align="right"><font color="#000080"><?php echo $fecha_pago; ?></font></td>
			<td style="height: 24; width: 2.7cm"><p align="right"><font color="#000080"><?php echo "Pago de Recibo"; ?></font></td>
			<td style="height: 24; width: 3.2cm"><p align="right"><font color="#000080"><?php echo "N/A"; ?></font></td>
			<td style="height: 24; width: 2.5cm"><p align="right"><font color="#000080"><?php echo $id_poliza; ?></font></td>
			</tr>
			</table>
	</td>
	</TR>
	</table>
<table style='margin-top:5px;width:20cm;'>
	<TR style="font-weight:bolder;background-color:gainsboro;">
		<TD style="width:3.8cm; border-top-right-radius:10px;border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style24">
		<strong>*Nombre</strong></td>
		<TD style="text-align:right;width:538px; border-top-right-radius:10px;border-top:1px solid #C8C8C8;border-right:1px solid #C8C8C8;color:blue;" class="auto-style27">
		<p style="text-align: left">
		<?php echo $nombreCom; ?></td>
	</TR>

<DETAIL>
	<TR>
		<TD style="width:3.8cm; border-top-right-radius:10px;height: 24px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style26">
		<strong class="auto-style32"><strong>*Direccion </strong> </strong>
		</td>
	<TD style="text-align:right;width:538px; border-top-right-radius:10px;border-top:1px solid #C8C8C8;border-right:1px solid #C8C8C8;color:blue;" class="auto-style27">
	<p style="text-align: left"><?php echo $domicilio; ?></td>
	</TR>
</DETAIL>

	<TR>
		<TD style="width:3.8cm; border-top-right-radius:10px;height: 24px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style26">
		<strong class="auto-style32"><strong>*Tipo </strong> </strong>
		</td>
	<TD style="border-left:1px solid white;border-top:1px solid white;;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8; width: 538px;">
	&nbsp;</td>
	</TR>

	<TR>
		<TD style="width:3.8cm; border-top-right-radius:10px;height: 24px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style26">
		<strong class="auto-style32"><strong>*Fecha de iniciacion </strong> </strong>
		</td>
	<TD style="border-left:1px solid white;border-top:1px solid white;;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8; width: 538px;">
	&nbsp;</td>
	</TR>
</table>
<table style='margin-top:5px;font-weight:bolder;border-spacing:0;text-align:center;padding:0;width:20.0cm;border:none;'>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; width: 163;" class="auto-style42">
	*Concepto</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="4">
	<font color="#000080">PAGO DE RECIBO</font></td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" class="auto-style42" colspan="2">
	*Total Pagado</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="3"><p align="center"><font color="#000080"><?php echo '$ '.$monto; ?></font></td>
	</TR>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; height: 25px; width: 163;" class="auto-style42">
	*Ingreso</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; height: 25px;" colspan="4">
	</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; height: 25px;" class="auto-style42" colspan="2">
	*Saldo</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; height: 25px;" colspan="3">
	</td>
	</TR>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; width: 163;" class="auto-style42">
	*Cuota</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="4">
	&nbsp;</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" class="auto-style42" colspan="2">
	*Forma de Pago</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="3">
	&nbsp;</td>
	</TR>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; width: 163;" class="auto-style42">
	*Libro</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="4">
	&nbsp;</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="2">
	&nbsp;</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="2">
	&nbsp;</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;">
	&nbsp;</td>
	</TR>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; width: 163;" class="auto-style42">
	*Importe Con Letra</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="6">
	&nbsp;</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="2">
	&nbsp;</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;">
	&nbsp;</td>
	</TR>
	<TR>
	<TD style="border-left:1px solid #C8C8C8;border-right:1px solid #C8C8C8;color:black;" class="auto-style34" colspan="10">
<table style='width:100%;'>
 <tr>
 <td style='width: 3.5cm;' class="auto-style33">
	 &nbsp;</td>
 <td style='width:10cm;border-right:1px solid #C8C8C8;' class="auto-style33">
	  &nbsp;</td>
 <td style='width: 3.0cm;' class="auto-style33">
	 &nbsp;</td>
 <td style='width: 3.0cm;text-align:right' class="auto-style2">
	&nbsp;</td>
 </tr>
 </table>
	
	</td>
	</TR>
	<TR>
	<TD style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;" class="auto-style36" colspan="4" rowspan="3">
	<span lang="es-mx">POR MEDIO DEL PRESENTE DOCUMENTO SOLIITO SER ACEPTADO 
	COMO MIEMBRO DE ESTE INSTITUTO DE ACUERDO CON EL ARTICULO 4 DE SU REGLAMENTO 
	INTERIOR. RECONOZCO ESTAR DEBIDAMENTE ENTERADO <br>DE DICHO REGLAMENTO Y 
	ESTOY DE ACUERDO CON SU APLICACION ASI MISMO, HE LEIDO Y ACEPTADO LAS<br>
	&nbsp;DISPOSICIONES QUE SE ESPECIFICAN AL REVERSO.</span></td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8; width: 268435488px;" colspan="2" class="auto-style45">
	__________________</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" colspan="2">
	</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" colspan="2">
	__________________</td>
	</TR>
	<TR>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8; height: 25px; width: 268435488px;" class="auto-style37" colspan="2">
	*<span class="auto-style32">Consejo Directivo</span></td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8; height: 25px;" colspan="2">
	</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8; height: 25px;" class="auto-style37" colspan="2">
	*<span class="auto-style32">Firma Solicitante</span></td>
	</TR>
	<TR>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8; width: 268435488px;" colspan="2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" colspan="2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" colspan="2">
	&nbsp;</td>
	</TR>
	<TR>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" class="auto-style2" colspan="2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" class="auto-style2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" class="auto-style2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8; width: 268435488px;" class="auto-style2" colspan="2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" class="auto-style2" colspan="2">
	&nbsp;</td>
	<TD style="border-bottom-left-radius:10px;border-left:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;" class="auto-style2" colspan="2">
	&nbsp;</td>
	</TR>
	<TR>
	<TD style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;" class="auto-style38" colspan="10">
	<b style="mso-bidi-font-weight:normal">
	<span lang="ES" style="font-family:&quot;Arial&quot;,sans-serif;
mso-bidi-font-family:&quot;Arial MT&quot;">
	FAVOR&nbsp;DE&nbsp;LEER&nbsp;CON&nbsp;CUIDADO&nbsp;LAS&nbsp;SIGUIENTES&nbsp;DISPOSICIONES:&nbsp;1.-LA&nbsp;CUOTA&nbsp;CORRESPONDIENTE&nbsp;A&nbsp;LA&nbsp;MENSUALIDAD&nbsp;NO&nbsp;SERA&nbsp;DEVUELTA&nbsp;POR&nbsp;MOTIVO&nbsp;ALGUNO&nbsp;SALVO&nbsp;EN&nbsp;LO&nbsp;DISPUESTO&nbsp;EN&nbsp;EL&nbsp;ARTICULO 
	5&nbsp;TO.,&nbsp;FRACCION IV&nbsp;DEL&nbsp;ACUERDO&nbsp;PUBLICADO&nbsp;EN&nbsp;EL&nbsp;DIARIO&nbsp;OFICIAL 
	DEL&nbsp;10&nbsp;DE&nbsp;MARZO DE&nbsp;1992.&nbsp;2.- UNA&nbsp;VEZ&nbsp;INICIADAS&nbsp;LAS&nbsp;CLASES,&nbsp;EL&nbsp;COSTO&nbsp;DE&nbsp;INSCRIPCION 
	Y/O&nbsp;REINSCRIPCION&nbsp;NO&nbsp;SERA&nbsp;REEMBOLSABLE,&nbsp;EN EL CASO QUE LAS CLASES NO 
	SE&nbsp;HAYAN INICIADO SE&nbsp;COBRARA EL 20% DE PENALIZACION POR CONCEPTO DE&nbsp;GASTOS 
	ADMINISTRATIVOS. 3.- EN CASO QUE SE REQUIERA DEVOLUCION DEL PAGO DEL COMBO 
	ESCOLAR (MATERIAL ESCOLAR),SE COBRARA UNA PENALIZACION DE HASTA EL 
	100%&nbsp;(DEPENDIENDO&nbsp;DE LA FECHA DE LASOLICITUD).&nbsp;4.- LOS&nbsp;PADRES&nbsp;DE FAMILIA&nbsp;ESTAN&nbsp;OBLIGADOS&nbsp;A 
	CUBRIR LAS&nbsp;CUOTAS MENSUALES&nbsp;DE COLEGIATURAS&nbsp;DE 
	SUS&nbsp;HIJOS&nbsp;PUNTUALMENTE,&nbsp;EN&nbsp;LOS PRIMEROS&nbsp;CINCO DIAS NATURALES DE CADA MES,&nbsp;EN 
	CASO DE SER INHABIL EL DIA 5, EL PAGO DEBERA REALIZARSE EL DIA HABIL 
	ANTERIOR. 5.-PARA REALIZAR CUALQUIER TIPO DE&nbsp;TRAMITE&nbsp;CON&nbsp;RESPECTO&nbsp;A&nbsp;UNA&nbsp;CANCELACION,&nbsp;ES&nbsp;INDISPENSABLE&nbsp;LA&nbsp;PRESENTACION&nbsp;DEL&nbsp;RECIBO&nbsp;DE&nbsp;PAGO&nbsp;CORRESPONDIENTE&nbsp;SELLADO&nbsp;EN&nbsp;ORIGINAL&nbsp;Y&nbsp;ENTREGADO&nbsp;AL&nbsp;MOMENTO&nbsp;DE&nbsp;HABER&nbsp;REALIZADO&nbsp;EL 
	PAGO.&nbsp;6.-PARA&nbsp;ACLARAR CUALQUIER&nbsp;DUDA&nbsp;CON&nbsp;RESPECTO 
	A&nbsp;LAS&nbsp;DISPOSICIONES&nbsp;ANTERIORES,&nbsp;FAVOR&nbsp;DE&nbsp;ACUDIR&nbsp;A LA&nbsp;ADMINISTRACION&nbsp;DEL&nbsp;COLEGIO.</span></b></td>
	</TR>
</table>
&nbsp;</div>

</body>

</html>

