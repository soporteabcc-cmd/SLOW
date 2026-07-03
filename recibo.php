<?php

require('conexion.php');


$buscar_alumnos = $_GET['recibo'];

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
			
			$conceptoletra = "";
			$concepto = substr($id_poliza, 0, 4);
			if ($concepto=="COLG") {$conceptoletra ="Mensualidad";}
			
		
		$query_busqueda_alumno_general = "SELECT * FROM `alumnos` WHERE ID='".$ID."';";
		$resultado=$mysqli->query($query_busqueda_alumno_general);
		$row=$resultado->fetch_assoc();

			$nombre_completo = ($row["NombreCom"]);
			$direccion = ($row["Direccion"]);
			$fecha_ingreso = ($row["Fecha_ingreso"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lowry</title>
    
    
    
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




    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style_page.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p>rmsoluciones23@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+52 5513770226</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">LOW</span>RY</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="panel.php" class="nav-item nav-link">
						<img border="0" src="images/inicio.svg" width="60" height="60"></img></a>
                        <a href="alumnos.php" class="nav-item nav-link">
						<img border="0" src="images/alumnos.svg" width="60" height="60"></img></a>
                        <a href="service.html" class="nav-item nav-link">
						<img border="0" src="images/profesores.svg" width="60" height="60"></img></a>
                        <a href="package.html" class="nav-item nav-link">
						<img border="0" src="images/grupos.svg" width="60" height="60"></img></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Reportes</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Editable</a>

                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">
						<img border="0" src="images/facturas.svg" width="60" height="60"></img></a>
                      
                    </div>
                </div>
            </nav>
        </div>
    </div>
	<p>&nbsp;</p>
	
	
	    <!-- Blog Start -->
    <div class="container-fluid py-5">
    


		
		
		
		<div align="center">
		







		
		
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
			<td style="height: 24; width: 2.7cm"><p align="center"><font color="#000080"><?php echo $conceptoletra." /   ".$fec_nac; ?></font></td>
			<td style="height: 24; width: 3.2cm"><p align="right"><font color="#000080"><?php echo $ID; ?></font></td>
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
		<TD style="text-align:left;width:538px; border-top-right-radius:10px;border-top:1px solid #C8C8C8;border-right:1px solid #C8C8C8;color:blue;" class="auto-style27">
			<?php echo $nombre_completo; ?>
		</td>
	</TR>

<DETAIL>
	<TR>
		<TD style="width:3.8cm; border-top-right-radius:10px;height: 24px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style26">
		<strong class="auto-style32"><strong>*Direccion </strong> </strong>
		</td>
	<TD style="text-align:left;border-right:1px solid #C8C8C8; height: 24px; width: 538px;"><?php echo $direccion; ?></td>
	</TR>
</DETAIL>

	<TR>
		<TD style="width:3.8cm; border-top-right-radius:10px;height: 24px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style26">
		<strong class="auto-style32"><strong>*Tipo </strong> </strong>
		</td>
	<TD style="border-left:1px solid white;border-top:1px solid white;;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8; width: 538px;">
	<?php echo "R"; ?></td>
	</TR>

	<TR>
		<TD style="width:3.8cm; border-top-right-radius:10px;height: 24px; border-right-style: solid; border-right-width: 1px; border-top-style: solid; border-top-width: 1px;" class="auto-style26">
		<strong class="auto-style32"><strong>*Fecha de iniciacion </strong> </strong>
		</td>
	<TD style="border-left:1px solid white;border-top:1px solid white;;border-bottom-right-radius:10px;border-right:1px solid #C8C8C8;border-bottom:1px solid #C8C8C8; width: 538px;">
	<?php echo $fecha_ingreso; ?></td>
	</TR>
</table>
<table style='margin-top:5px;font-weight:bolder;border-spacing:0;text-align:center;padding:0;width:20.0cm;border:none;'>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; width: 163;" class="auto-style42">
	*Concepto</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="4">
	<?php echo $conceptoletra; ?></td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" class="auto-style42" colspan="2">
	*Total Pagado</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="3"><p align="center"><font color="#000080"><?php echo '$ '.$monto; ?></font></td>
	</TR>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; height: 25px; width: 163;" class="auto-style42">
	*Ingreso</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; height: 25px;" colspan="4">
	<?php echo " $0 "; ?></td>
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
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="3"><p align="center"><font color="#000080"><?php echo $forma_pago; ?></font></td>
	</TR>
	<TR>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8; width: 163;" class="auto-style42">
	*Libro</td>
	<td style="border-top-right-radius:10px;border-right:1px solid #C8C8C8;border-top-left-radius:10px;border-top:1px solid #C8C8C8;border-left:1px solid #C8C8C8;" colspan="4">
	<?php echo " $0 "; ?></td>
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
	<?php echo ""; ?></td>
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





		</div>
	</form>
		</div>

    <!-- Navbar End -->


  





    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <div class="position-relative">
                            

                                
                    <!-- Category List -->
                    <div class="mb-5">


                        
                        
                                                    <!-- Blog Detail Start -->

                        
                        
                    </div>
                    
                                
                                
                                
                                <!-- Blog Detail Start -->
                                
                            </div>
                        </div>

                    </div>
                    <!-- Blog Detail End -->
    
    
  
                    <!-- Comment Form End -->
                </div>
    

            </div>
        </div>
    </div>
    <!-- Blog End -->









    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">LOW</span>RY</h1>
                </a>
                <p>Sed ipsum clita tempor i lorem dolor dolor</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>

                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>

                    <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">REVOTEC</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://rmsoluciones.com">HTML Codex</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

