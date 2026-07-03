<?php

	require('conexion.php');

	$id_venta = $_GET['recibo'];

	$query_busqueda_producto = "SELECT * FROM `inventario_lowry`";
	$query_busqueda_factura = "SELECT * FROM `ventas_alumno_detalle` WHERE id_venta='".$id_venta."';";
	
	$query_busqueda_folio_venta = "SELECT * FROM `ventas_alumnos` WHERE id_venta='".$id_venta."';";
			$resultado=$mysqli->query($query_busqueda_folio_venta);
			$row=$resultado->fetch_assoc();
		
	$id_alumno = ($row["id_alumno"]);
	$forma_pago = ($row["forma_pago"]);
	$nombre_completo = ($row["contribuyente"]);
	$monto = ($row["monto"]);
	$iva = ($row["iva"]);
	$total = ($row["total"]);



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
                                <a href="reporte_pagos_colegiatura.php" class="dropdown-item">Pagos Colegiatura</a>
								<a href="reporte_pagos_uniforme.php" class="dropdown-item">Ventas Uniformes</a>
								<a href="reporte_pagos_facturas.php" class="dropdown-item">Facturas</a>

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
<hr>

    <div align="center">
    <form action="proc_agregar_venta_detalle.php" method="POST">
							
							<input type="hidden" value=<?php echo $id_venta; ?> name="txt_id_venta" size="22" />
		<table border="0" width="90%" bgcolor="#BD2130">
			<tr>
				<td width="1%"></td>
				<td width="11%">
				<p align="center"><font color="#FFFFFF">Recibo: <?php echo $id_venta; ?></font></td>
				<td colspan="4">
				<p align="center"><font color="#FFFFFF">Venta: <?php echo $nombre_completo; ?></font></td>
				<td width="36%">
				<p align="center"><font color="#FFFFFF">Forma de Pago: <?php echo $forma_pago; ?></font></td>
				<td width="1%" rowspan="5">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="6" align="center"><font size="4" color="#FFFFFF">
				Agregar un producto...</font></td>
				<td bgcolor="#BD2130" rowspan="7" width="36%">
														
							
				<p align="center">
		<img border="0" src="images/fondo_alumnos.jpg" width="370" height="220"></td>
			</tr>
			

			
			<tr>
				<td width="1%"></td>
				<td align="right" bgcolor="#FFCC66" width="11%"><font color="#000080">
				Producto:</font></td>
				<td bgcolor="#FFCC66" width="8%">
																					
							
							<span style="background-color: #FFC107">
							<font size="3" face="Arial">
							

							<select id="miCombobox5" name="txt_descripcion_producto" style="font-weight: 700">
			<?php	require('conexion.php'); $resultado=$mysqli->query($query_busqueda_producto); ?>
			<?php while($row=$resultado->fetch_assoc()) { ?>
			<?php
			
			$id_producto = ($row["id_producto"]);
			$descripcion = ($row["descripcion"]);
			$existencia = ($row["existencia"]);
			$costo = ($row["costo"]);



	?>
								<option value="<?php echo $id_producto; ?>"><?php echo $id_producto." - ".$descripcion." - $".$costo." Pesos"; ?></option>


						<?php } ?>
							</select></font></span>
						</td>
				<td bgcolor="#FFCC66" width="9%"><font color="#000080">Cantidad:</font></td>
				<td bgcolor="#FFCC66" width="16%">
				<input name="txt_cantidad" size="8" style="float: left"></td>
				<td bgcolor="#FFCC66" width="14%">
					<p align="center"><button type="submit" class="btn btn-success btn-raised btn-xs">Aceptar</button>
					<input type="hidden" value=<?php echo $id_venta; ?> name="txt_id_venta" size="22" />
				</td>
				
			</tr>

</form>



			<tr>
				<td width="58%" bgcolor="#BD2130" colspan="6"><hr></td>
			</tr>





			<tr>
				<td width="1%"></td>
				<td align="center" bgcolor="#FFCC66" width="11%"><font color="#000080">Cantidad</font></td>
				<td bgcolor="#FFCC66" align="center" colspan="3"><font color="#000080">Producto</font></td>
				<td bgcolor="#FFCC66" align="center" width="14%"><font color="#000080">Costo</font></td>
				
			</tr>
			

			
			<!-- Navbar End //aqui -->
			
			
			<?php	require('conexion.php'); $resultado=$mysqli->query($query_busqueda_factura); ?>
			<?php while($row=$resultado->fetch_assoc()) { ?>
			<?php
			
			$cantidad = ($row["cantidad"]);
			$descripcion = ($row["descripcion"]);
			$costo = ($row["costo"]);
	?>			
			<tr>
				<td width="1%"></td>
				<td align="center" bgcolor="#FFCC66" width="11%"><?php echo $cantidad; ?></td>
				<td bgcolor="#FFCC66" align="center" colspan="3"><?php echo $descripcion; ?></td>
				<td bgcolor="#FFCC66" align="center" width="14%"><?php echo number_format($costo, 2, '.', ','); ?></td>
			</tr>

<?php } ?>	
			
			
			<tr>
				<td width="1%"></td>
				<td align="center" bgcolor="#FFCC66" width="11%"></td>
				<td bgcolor="#FFCC66" align="center" colspan="3"></td>
				<td bgcolor="#FFCC66" align="center" width="14%"></td>
			</tr>
			
			
			<tr>
				<td width="1%"></td>
				<td align="center" bgcolor="#FFCC66" width="11%"></td>
				<td bgcolor="#FFCC66" align="center" colspan="3"></td>
				<td bgcolor="#FFCC66" align="center" width="14%"></td>
			</tr>
			
			
			<tr>
				<td width="1%"></td>
				<td align="center" bgcolor="#FFCC66" width="11%"></td>
				<td bgcolor="#FFCC66" align="right" colspan="3">
				<font color="#000080">Subtotal:</font></td>
				<td bgcolor="#FFCC66" align="center" width="14%"><?php echo number_format($monto, 2, '.', ','); ?></td>
				<td bgcolor="#BD2130" rowspan="6" width="36%"></tr>
			
			
			<tr>
				<td width="1%">&nbsp;</td>
				<td align="center" bgcolor="#FFCC66" width="11%">&nbsp;</td>
				<td bgcolor="#FFCC66" align="right" colspan="3">
				<font color="#000080">Iva:</font></td>
				<td bgcolor="#FFCC66" align="center" width="14%"><?php echo number_format($iva, 2, '.', ','); ?></td>
			</tr>
			
			
			<tr>
				<td width="1%" rowspan="3">&nbsp;</td>
				<td align="center" bgcolor="#FFCC66" width="11%">&nbsp;</td>
				<td bgcolor="#FFCC66" align="right" colspan="3">
				<font color="#000080">Total:</font></td>
				<td bgcolor="#FFCC66" align="center" width="14%"><?php echo number_format($total, 2, '.', ','); ?></td>
			</tr>
			
			
			<tr>
				<td align="center" bgcolor="#BD2130" colspan="5"><hr></td>
			</tr>
			
			
			<tr>
				<td align="center" bgcolor="#FFCC66" width="11%">&nbsp;</td>
				<td bgcolor="#FFCC66" align="right" colspan="3">
				&nbsp;</td>
				<td bgcolor="#FFCC66" align="center" width="14%">
					<form action="proc_pagar_factura.php" method="POST">
						<p align="center"><button type="submit" class="btn btn-success btn-raised btn-xs">Pagar</button>
						<input type="hidden" name="txt_busqueda_alumnos" size="22" value=<?php echo $id_venta; ?>  />
					</form>
				</td>
			</tr>
			<tr>
				<td colspan="8" bgcolor="#BD2130">.</td>
			</tr>
		</table>
		
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