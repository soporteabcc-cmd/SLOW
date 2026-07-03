<?php


			$hora_actual=date("Y-m-d")."T".date("H:i:s");

	require('conexion.php');

	$dato1 = $_POST['txt_apaterno'];		$dato2 = $_POST['txt_amaterno'];
	$dato3 = $_POST['txt_nombre'];			$dato4 = $_POST['txt_nombrecom'];
	$dato5 = $_POST['txt_curp'];			$dato6 = $_POST['txt_fecha_nacimiento'];
	$dato7 = $_POST['txt_direccion'];		$dato8 = $_POST['txt_colonia'];
	$dato9 = $_POST['txt_cp'];				$dato10 = $_POST['txt_ciudad'];
	$dato11 = $_POST['txt_fecha_ingreso'];	$dato12 = $_POST['txt_txt_telefono'];
	$dato13 = $_POST['txt_otro'];			$dato14 = $_POST['txt_email'];
	$dato15 = $_POST['txt_celular'];		$dato16 = $_POST['txt_rfc'];
	$dato17 = $_POST['txt_escuela'];		$dato18 = $_POST['txt_baja'];
	$dato19 = $_POST['txt_nivel'];			$dato20 = $_POST['txt_coordinador'];	
	$dato21 = $_POST['txt_nacionalidad'];	$dato22 = $_POST['txt_imss'];	
	$dato23 = $_POST['txt_telefono2'];	

    
	$query_max_re="SELECT count(id_maestro) as total FROM `maestros_lowry`";

	  	$resultado=$mysqli->query($query_max_re);
  		$row=$resultado->fetch_assoc();

	$id_max_re= ($row["total"]);
	$id_max_res= $id_max_re+1;

	$query_nueva_reservacion = "INSERT INTO `maestros_lowry`(`id_maestro`, `ape_paterno`, `ape_materno`, `nombre`, `nombre_completo`, `curp`, `fec_nac`, 
	`direccion`, `colonia`, `cp`, `ciudad`, `fec_ingeso`, `telefono`, `otro`, `correo`, `celular`, `rfc`, `escuela`, `baja`, `nivel`, `coordinador`, 
	`nacionalidad`, `imss`, `telefono2`, `sucursal`) VALUES (
	'LOWPROF".$id_max_res."','".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."','".$dato8."','".$dato9."','".$dato10.
	"','".$dato11."','".$dato12.

	"','".$dato13."','".$dato14."','".$dato15."','".$dato16.
	"','".$dato17."','".$dato18."','".$dato19."','".$dato20.
	"','".$dato21."','".$dato22."','".$dato23."','".$dato24."');";

	$resultado=$mysqli->query($query_nueva_reservacion);



?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha creado el  maestro- '.$dato1; ?>");
  </script>
<script language="javascript">location.href = "profesores.php";</script>
</html>
