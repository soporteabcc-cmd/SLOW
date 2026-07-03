<?php


			$hora_actual=date("Y-m-d")."T".date("H:i:s");

	require('conexion.php');
	
	$buscar_alumnos = $_POST['txt_id'];

	$dato1 = $_POST['txt_nombre'];			$dato2 = $_POST['txt_apaterno'];		$dato3 = $_POST['txt_amaterno'];
	$dato4 = $_POST['txt_nombrecom'];		$dato5 = $_POST['txt_direccion'];		$dato6 = $_POST['txt_colonia'];
	$dato7 = $_POST['txt_cp'];				$dato8 = $_POST['txt_ciudad'];			$dato9 = $_POST['txt_fecha_nacimiento'];
	$dato10 = $_POST['txt_telefono'];		$dato11 = $_POST['txt_otro'];			$dato12 = $_POST['txt_celular'];
	$dato13 = $_POST['txt_escuela'];		$dato14 = $_POST['txt_fecha_ingreso'];	$dato15 = $_POST['txt_baja'];
	
	$dato16 = $_POST['txt_curp'];			$dato17 = $_POST['txt_email'];			$dato18 = $_POST['txt_rfc'];
	$dato19 = $_POST['txt_coordinador'];	$dato20 = $_POST['txt_nacionalidad'];	$dato21 = $_POST['txt_imss'];
	$dato23 = $_POST['txt_nivel'];			$dato24 = $_POST['txt_telefono2'];
    
	$query_nueva_reservacion = "UPDATE `maestros_lowry` SET `nombre`='".$dato1."',`ape_paterno`='".$dato2."',`ape_materno`='".$dato3."',
	`nombre_completo`='".$dato4."',`direccion`='".$dato5."',`colonia`='".$dato6."',`cp`='".$dato7."',`ciudad`='".$dato8."',`fec_nac`='".$dato9."',
	`telefono`='".$dato10."',`otro`='".$dato11."',`celular`='".$dato12."',`escuela`='".$dato13."',`fec_ingeso`='".$dato14."',
	`baja`='".$dato15."',`curp`='".$dato16."',`correo`='".$dato17."',`rfc`='".$dato18."',`coordinador`='".$dato19."',`nacionalidad`='".$dato20."',
	`imss`='".$dato21."',`nivel`='".$dato23."',`telefono2`='".$dato24."' WHERE id_maestro='".$buscar_alumnos."';";
	


	$resultado=$mysqli->query($query_nueva_reservacion);

?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha editado el maestro- '.$dato4; ?>");
  </script>
<script language="javascript">location.href = "profesores.php";</script>

</html>