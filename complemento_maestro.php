<?php


require('conexion.php');
$buscar_alumnos = $_POST['txt_busqueda_alumnos'];

$query_busqueda_alumno = "SELECT * FROM `maestros_lowry` WHERE id_maestro ='".$buscar_alumnos."';";

		$resultado=$mysqli->query($query_busqueda_alumno);
		$row=$resultado->fetch_assoc();

	$dato1 = ($row["nombre"]);	$dato2 = ($row["ape_paterno"]);	$dato3 = ($row["ape_materno"]);
	$dato4 = ($row["nombre_completo"]);	$dato5 = ($row["direccion"]);	$dato6 = ($row["colonia"]);
	$dato7 = ($row["cp"]);	$dato8 = ($row["ciudad"]);	$dato9 = ($row["fec_nac"]);
	$dato10 = ($row["telefono"]);	$dato11 = ($row["otro"]);	$dato12 = ($row["celular"]);
	$dato13 = ($row["escuela"]);	$dato14 = ($row["fec_ingeso"]);	$dato15 = ($row["baja"]);

	$dato16 = ($row["curp"]);	$dato17 = ($row["correo"]);	$dato18 = ($row["rfc"]);

	$dato23 = ($row["nivel"]);	

	
		

$query_busqueda_alumno = "SELECT * FROM alumnos WHERE ID='".$buscar_alumnos."';";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lowry</title>
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
		
		
		
<table border="1" width="90%">

	<tr>
		<td bgcolor="#FFFFFF" colspan="6">&nbsp;<p align="center">
		<font size="5" color="#225555">Ficha del Maestro</font></td>
	</tr>

	<tr>
		<td bgcolor="#BD2130" colspan="6">&nbsp;</td>
	</tr>
	<tr>
		<td bgcolor="#BD2130" rowspan="18">&nbsp;</td>
		<td bgcolor="#C0C0C0" rowspan="10">&nbsp;<p align="center"><img border="0" src="images/profesores.png" width="206" height="208"></td>
		<td bgcolor="#FFCC66" rowspan="10">
	<p align="center"><?php echo "Nombre del Maestro: ".$dato1." ".$dato2." ".$dato3; ?></p>
	<hr color="#FFFFFF">
	<p align="center"><?php echo "Curp: ".$dato16; ?></p>
	<p align="center"><?php echo "Rfc: ".$dato18; ?></p>

	<p align="center"><?php echo "Nivel: ".$dato23; ?></p>
	<p align="center"><?php echo "Fecha de Nacimiento: ".$dato9; ?></p>
	&nbsp;</td>
		<td bgcolor="#BD2130" colspan="2"><p align="center"><font color="#FFFFFF">Datos de 
		Maestro</font></td>
		<td bgcolor="#BD2130" rowspan="4">&nbsp;</td>
	</tr>
	<tr>
	<td width="167" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Cel:</td>
	<td width="452" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato12; ?></font></td>
	</tr>
	<tr>
	<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Tel:</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato10; ?></font></td>
	</tr>
	<tr>
	<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Tel 2:</td>
	<td width="446" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato11; ?></font></td>
	</tr>
	<tr>
		<td bgcolor="#BD2130" colspan="3">
	<hr color="#FFFFFF"></td>
	</tr>
	<tr>
	<td width="167" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Direccion:</td>		
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato5; ?></font></td>
		<td bgcolor="#BD2130" rowspan="5">&nbsp;</td>
	</tr>
	<tr>
	<td width="167" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Colonia:</td>	
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato6; ?></font></td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	CP:</td>	
	<td width="446" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato7; ?></font></td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Ciudad:</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato8; ?></font></td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="452" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
	</tr>
	<tr>
	<td width="1792" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right" colspan="4">
	<hr color="#FFFFFF"></td>
		<td bgcolor="#BD2130">&nbsp;</td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="452" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo ""; ?></font></td>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="452" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
		<td bgcolor="#BD2130" rowspan="7">&nbsp;</td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Baja:</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato15; ?></font></td>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Telefono:</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato10; ?></font></td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Correo:</td>
	<td width="446" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato17; ?></font></td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Escuela:</td>
<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato13; ?></font></td>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	Cel 2:</td>
	<td width="446" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left"><font color="#0000FF"><?php echo $dato11; ?></font></td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
<td width="452" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="446" bgcolor="#FFCC66" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>
	</tr>
	<tr>
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">&nbsp;</td>
	<td width="690" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>	
	<td width="206" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="right">
	&nbsp;</td>
	<td width="690" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">&nbsp;</td>	
	</tr>
	
			<?php	require('conexion.php'); $resultado=$mysqli->query($query_busqueda_alumno); ?>
			<?php while($row=$resultado->fetch_assoc()) { ?>
			<?php
			
			$ID = ($row["ID"]);
			$NombreCom = ($row["NombreCom"]);
			$Grupo = ($row["grupo"]);
			$Fecha_ingreso = ($row["Fecha_ingreso"]);



	?>
		
	
	
							<?php } ?>
							
							
							
	<tr>
		<td bgcolor="#BD2130">&nbsp;</td>
		<td bgcolor="#BD2130">&nbsp;</td>
		<td bgcolor="#BD2130">&nbsp;</td>
		<td bgcolor="#BD2130">&nbsp;</td>
		<td bgcolor="#BD2130">&nbsp;</td>
		<td bgcolor="#BD2130">&nbsp;</td>
	</tr>
</table>
		</div>
	</form>
		</div>

    <!-- Navbar End -->


  







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

