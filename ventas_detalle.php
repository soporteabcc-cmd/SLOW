<?php

require('conexion.php');

$buscar_alumnos = $_POST['txt_busqueda_alumnos'];

if (empty($buscar_alumnos)) {
	$buscar_alumnos = "@";
} 

$query_busqueda_alumno = "SELECT * FROM `alumnos` WHERE ID='".$buscar_alumnos."';";
		$resultado=$mysqli->query($query_busqueda_alumno);
		$row=$resultado->fetch_assoc();
		
	$nombre = ($row["NombreCom"]);
	$contacto = ($row["Contacto"]);
	$RFC = ($row["RFC"]);
	$cp = ($row["CP"]);

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
                <h3><font color="#FFC107">Alumnos</font></h3>
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

    <hr>

    <div align="center">
    <form action="proc_venta.php" method="POST">
							
							<input type="hidden" value=<?php echo $buscar_alumnos; ?> name="txt_busqueda_alumnos" size="22" />
		<table border="0" width="90%" bgcolor="#BD2130">
			<tr>
				<td>&nbsp;</td>
				<td colspan="7">
				<p align="center"><font color="#FFFFFF">Datos de Facturacion</font></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td align="right" bgcolor="#FFCC66"><font color="#000080">Venta a Nombre  - </font></td>
				<td bgcolor="#FFCC66">
							<input name="txt_Apaterno" size="45" style="float: left" value ="<?php echo $nombre." / ".$contacto; ?>" ></td>
				<td bgcolor="#FFCC66">
							<font color="#000080">Modo de Pago:</font></td>
				<td bgcolor="#FFCC66">
																					
							
							<span style="background-color: #FFC107">
							<font size="3" face="Arial">
							
							
							<select id="miCombobox5" name="txt_forma_pago" style="font-weight: 700">
								<option value="Tarjeta">Tarjeta</option>
	                            <option value="Efectivo">Efectivo</option>
	                            <option value="Cheque">Cheque</option>
	                            <option value="Transferencia">Transferencia</option>

</select></font></span></td>
				<td align="right" bgcolor="#FFCC66"></td>
				<td bgcolor="#FFCC66">
														
							
							&nbsp;</td>
				<td bgcolor="#FFCC66">&nbsp;</td>
			</tr>

			<tr>
				<td></td>
				<td align="right" bgcolor="#FFCC66"><font color="#000080">RFC deFactura: </font></td>
				<td bgcolor="#FFCC66"><input name="txt_rfc" size="45" style="float: left" value ="<?php echo $RFC; ?>" ></td>
				<td bgcolor="#FFCC66"><font color="#000080">Cp - </font></td>
				<td bgcolor="#FFCC66"><input name="txt_cp" size="9" style="float: left" value ="<?php echo $cp; ?>" ></td>
				<td align="right" bgcolor="#FFCC66"></td>
				<td bgcolor="#FFCC66">
														
							
							&nbsp;</td>
				<td bgcolor="#FFCC66"></td>
				<td rowspan="2"></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td align="right" bgcolor="#FFCC66"></td>
				<td bgcolor="#FFCC66" colspan="3">
				<p align="center"><button type="submit" class="btn btn-success btn-raised btn-xs">Aceptar</button>
				</td>
				<td align="right" bgcolor="#FFCC66"></td>
				<td bgcolor="#FFCC66">
														
							
							&nbsp;</td>
				<td bgcolor="#FFCC66">&nbsp;</td>
			</tr>

			<tr>
				<td colspan="8">&nbsp;</td>
			</tr>
		</table>
		</form>
</div>



    <!-- Navbar End -->

							
							
							
							
							
							

										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
										
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