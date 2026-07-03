<?php


require('conexion.php');

$buscar_alumnos = $_POST['txt_busqueda_alumnos'];

if (empty($buscar_alumnos)) {
	$buscar_alumnos = "@";
} 

$query_busqueda_alumno = "SELECT * FROM `alumnos` WHERE Nombre LIKE '%".$buscar_alumnos."%';";


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
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Lo<font color="#008000">wry</font></h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                            
                            
                            
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
										<form action="editar_alumnos.php" method="POST">
											<th class="text-center" colspan="4">
												<input type="text" name="txt_busqueda_alumnos" size="40" placeholder="Ingresar Nombre" style="font-family: Arial; font-size: 14pt; font-weight: bold" >
												<button type="submit" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i>Buscar</button>
											</th>
										</form>
										</tr>
										<tr>
											<th class="text-center">ID</th>
											<th class="text-center">Fec. Nacimiento</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Editar</th>
										</tr>
									</thead>
									<tbody>




			<?php	require('conexion.php'); $resultado=$mysqli->query($query_busqueda_alumno); ?>
			<?php while($row=$resultado->fetch_assoc()) { ?>
			<?php
			
			$ID = ($row["ID"]);
			$nombre = ($row["NombreCom"]);
			$fec_nac = ($row["Fecha_nacimiento"]);



	?>

						<tr>

							
							<td width="9%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center">
							<font color="#0000FF"><?php echo $ID; ?></font></td>
							
							<td width="15%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center">
							<font color="#0000FF"><?php echo $fec_nac; ?></font></td>
							
							<td width="53%" bgcolor="#FF9900" style="border-style: solid; border-width: 0; padding-left: 4px; padding-right: 4px; padding-top: 1px; padding-bottom: 1px" align="center">
							<font color="#0000FF"><?php echo $nombre; ?></font></td>

							<form action="caratula_editar_alumno.php" method="POST">
								<td>
									<input type="hidden" value=<?php echo $ID; ?> name="txt_busqueda_alumnos" size="22" />
									<button type="submit" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i>Editar</button>
								</td>
							</form>

			
			</tr>


						<?php } ?>


										




									</tbody>
								</table>

                            </ul>
                        </div>
                        
                        
                                                    <!-- Blog Detail Start -->
                            
                                &nbsp;<div class="blog-date">
                                    <h6 class="font-weight-bold mb-n1">Ago</h6>
                                    <small class="text-white text-uppercase">2025</small>
                                </div>
                        
                        
                    </div>
                    
                                
                                
                                
                                <!-- Blog Detail Start -->
                                
                            </div>
                        </div>

                    </div>
                    <!-- Blog Detail End -->
    
    
  
                    <!-- Comment Form End -->
                </div>
    
                <div class="col-lg-4 mt-5 mt-lg-0">

    
                    <!-- Search Form -->


                    <!-- Category List -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">
						ACCIONES</h4>
                        <div class="bg-white" style="padding: 30px;">
                            <ul class="list-inline m-0">
                                <li class="mb-3 d-flex justify-content-between align-items-center">
                                <form action="alta_alumnos.php" method="POST">

										<button type="submit" class="btn btn-success btn-raised btn-xs"><a>ALTA</a></button>
										<input type="hidden" value=<?php echo "@"; ?> name="txt_busqueda_alumnos" size="22" />

								</form>
                                </li>

                             
                                
                            </ul>
                        </div>
                    </div>
    
                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            &nbsp;<div class="pl-3">
                    
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            &nbsp;<div class="pl-3">

                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            &nbsp;<div class="pl-3">

                            </div>
                        </a>
                    </div>
    
                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h4>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-light m-1">Design</a>
                            <a href="" class="btn btn-light m-1">Development</a>
                            <a href="" class="btn btn-light m-1">Marketing</a>
                            <a href="" class="btn btn-light m-1">SEO</a>
                            <a href="" class="btn btn-light m-1">Writing</a>
                            <a href="" class="btn btn-light m-1">Consulting</a>
                        </div>
                    </div>
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