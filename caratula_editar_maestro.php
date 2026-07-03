<?php

require('conexion.php');

$buscar_alumnos = $_POST['txt_busqueda_maestros'];

	$query_busqueda_alumno = "SELECT * FROM `maestros_lowry` WHERE id_maestro = '".$buscar_alumnos."';";
	$resultado=$mysqli->query($query_busqueda_alumno);
	$row=$resultado->fetch_assoc();

	$dato1 = ($row["nombre"]);			$dato2 = ($row["ape_paterno"]);		$dato3 = ($row["ape_materno"]);
	$dato4 = ($row["nombre_completo"]);	$dato5 = ($row["direccion"]);		$dato6 = ($row["colonia"]);
	$dato7 = ($row["cp"]);				$dato8 = ($row["ciudad"]);			$dato9 = ($row["fec_nac"]);
	$dato10 = ($row["telefono"]);		$dato11 = ($row["otro"]);			$dato12 = ($row["celular"]);
	$dato13 = ($row["escuela"]);		$dato14 = ($row["fec_ingeso"]);		$dato15 = ($row["baja"]);
	
	$dato16 = ($row["curp"]);			$dato17 = ($row["correo"]);			$dato18 = ($row["rfc"]);
	$dato19 = ($row["coordinador"]);	$dato20 = ($row["nacionalidad"]);	$dato21 = ($row["imss"]);
	$dato23 = ($row["nivel"]);			$dato24 = ($row["telefono2"]);





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
                <h3><font color="#FFC107">Profesores</font></h3>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="panel.php" class="nav-item nav-link">
						<img border="0" src="images/inicio.svg" width="60" height="60"></img></a>
                        <a href="alumnos.php" class="nav-item nav-link">
						<img border="0" src="images/alumnos.svg" width="60" height="60"></img></a>
                        <a href="profesores.php" class="nav-item nav-link">
						<img border="0" src="images/profesores.svg" width="60" height="60"></img></a>
                        <a href="grupos.php" class="nav-item nav-link">
						<img border="0" src="images/grupos.svg" width="60" height="60"></img></a>
                        <div class="nav-item dropdown">
                            <a href="reportes.php" class="nav-link dropdown-toggle active" data-toggle="dropdown">Reportes</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Editable</a>

                            </div>
                        </div>
                        <a href="facturas.php" class="nav-item nav-link">
						<img border="0" src="images/facturas.svg" width="60" height="60"></img></a>
						
                      
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->	
	
	    <!-- Blog Start -->
    <div class="container-fluid py-5">
    
    										<form action="proc_editar_profesor.php" method="POST">
								<div align="center">
								<table class="table table-hover text-center" width="90%" style="width: 80%">

						<tr>

							
							<td width="93%" bgcolor="#FFFFFF" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center" colspan="4">
							&nbsp;<p><u><b><font color="#343A40" size="5">
							Editar Datos del Profesor</font></b></u></td>
							
							</tr>

						<tr>

							
							<td width="41%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center" colspan="2">
							Datos Personales</td>
							
							<td width="52%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center" colspan="2">
							Historial Academico</td>
							

			
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Nombre(s)</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center">
							<input name="txt_nombre" size="45" value="<?php echo $dato1; ?>" style="float: left"></td>
							
							<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Rfc</td>


							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							<input name="txt_rfc" size="45" value="<?php echo $dato18; ?>" style="float: left"></td>
							

			
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Ap. Paterno</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_apaterno" size="45" value="<?php echo $dato2; ?>" style="float: left"></td>
							
							<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Escuela</td>


							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							<input name="txt_escuela" size="45" value="<?php echo $dato13; ?>" style="float: left"></td>
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Ap. Materno</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_amaterno" size="45"  value="<?php echo $dato3; ?>"style="float: left"></td>
							
							<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Baja</td>


							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							<input name="txt_baja" size="45" value="<?php echo $dato15; ?>" style="float: left"></td>
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Nombre Completo</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_nombrecom" value="<?php echo $dato4; ?>" size="45" style="float: left"></td>
							
							<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Nivel</td>


							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							<input name="txt_nivel" size="45" value="<?php echo $dato23; ?>" style="float: left"></td>			
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Curp</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_curp" size="45" value="<?php echo $dato16; ?>" style="float: left"></td>
							
							<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Coordinador</td>


							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							<input name="txt_coordinador" size="45" value="<?php echo $dato19; ?>" style="float: left"></td>


			
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Fec. Nac</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_fecha_nacimiento" size="45" value="<?php echo $dato9; ?>" style="float: left"></td>
							
							
							
						
							
							
														
							
							
							
							

	                            
	                            
							
							<td bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Nacionalidad</td>


							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							<input name="txt_nacionalidad" size="45" value="<?php echo $dato20; ?>" style="float: left"></td>


			
			</tr>

						<tr>			
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Direccion</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_direccion" size="45" value="<?php echo $dato5; ?>" style="float: left"></td>
							
							
							
						
							
							
														
							
							
							
							

	                            
	                            
							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							IMSS</td>
							
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_imss" size="45" value="<?php echo $dato21; ?>" style="float: left"></td>
							
							
			
			</tr>
						<tr>
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Colonia</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_colonia" size="45" value="<?php echo $dato6; ?>" style="float: left"></td>
							
							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Cel 2</td>
							
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_telefono2" size="45" value="<?php echo $dato24; ?>" style="float: left"></td>
							
							
			
			</tr>

						<tr>
							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							CP</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_cp" size="45" value="<?php echo $dato7; ?>" style="float: left"></td>
							
							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							&nbsp;</td>
							
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							&nbsp;</td>
							
							
			
			</tr>
						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Ciudad</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_ciudad" size="45" value="<?php echo $dato8; ?>" style="float: left"></td>
							
							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center" colspan="2">
							&nbsp;</td>


			
			</tr>
						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Fecha_ingreso</td>
							
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_fecha_ingreso" size="45" value="<?php echo $dato14; ?>" style="float: left"></td>
							
							
							
						
							
							
														
							
							
							
							

	                            
	                            
							
							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							&nbsp;</td>


							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							&nbsp;</td>


			
			</tr>
						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Telefono</td>
							
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_telefono" size="45" value="<?php echo $dato10; ?>" style="float: left"></td>
							
							
							<td width="11%" bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							&nbsp;</td>
							
							
							<td width="30%" bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							&nbsp;</td>
							
							
			</tr>

						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Telefono 2</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_otro" size="45" value="<?php echo $dato11; ?>" style="float: left"></td>
							
							
							<td width="11%" bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							&nbsp;</td>
							
							
							<td width="30%" bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							&nbsp;</td>
							
							
			
			</tr>
						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Correo</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_email" size="45" value="<?php echo $dato17; ?>" style="float: left"></td>
							
							
							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							&nbsp;</td>


							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							&nbsp;</td>


			
			</tr>
						<tr>

							
							<td width="11%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							Celular</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left">
							<input name="txt_celular" size="45" value="<?php echo $dato12; ?>" style="float: left"></td>
							
							
							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center">
							&nbsp;</td>


							<td bgcolor="#800000" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="left" width="41%">
							</td>
			</tr>
						<tr>

							
							
							
							
							



</td>

			
			</tr>




										




						<tr>

							
							<td width="97%" bgcolor="#BD2130" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px; color:#FFFFFF; font-family:Arial; font-size:12pt" align="center" colspan="4">
							&nbsp;</td>
			</tr>




										




						<tr>

							
							<td bgcolor="#C0C0C0" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center" colspan="4">
							&nbsp;</td>
							
			
			</tr>




										




						<tr>

							
							<td width="11%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center">
							&nbsp;</td>
							
							<td width="30%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center">
							&nbsp;</td>
							
							<td bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center" colspan="2">
							<input type="hidden" value=<?php echo $buscar_alumnos; ?> name="txt_id" size="22" />
							<button type="submit" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i>Guardar</button></td>

			
			</tr>


								</table>
										</div>
										</form>
								</div>

    <!-- Navbar End -->


  



    <!-- Footer End -->



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

