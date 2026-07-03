<?php


			$hora_actual=date("Y-m-d")."T".date("H:i:s");

	require('conexion.php');
	
	$buscar_alumnos = $_POST['txt_id'];

	$dato1 = $_POST['txt_nombre'];			$dato2 = $_POST['txt_Apaterno'];			$dato3 = $_POST['txt_Amaterno'];
	$dato4 = $_POST['txt_NombreCom'];		$dato5 = $_POST['txt_Direccion'];			$dato6 = $_POST['txt_Colonia'];
	$dato7 = $_POST['txt_CP'];				$dato8 = $_POST['txt_Ciudad'];				$dato9 = $_POST['txt_Fecha_nacimiento'];
	$dato10 = $_POST['txt_Telefono'];		$dato11 = $_POST['txt_Telefono2'];			$dato12 = $_POST['txt_Celular'];
	$dato13 = $_POST['txt_Escuela'];		$dato14 = $_POST['txt_Fecha_ingreso'];		$dato15 = $_POST['txt_Baja'];

	$dato16 = $_POST['txt_CURP'];			$dato17 = $_POST['txt_Email'];				$dato18 = $_POST['txt_RFC'];
	$dato19 = $_POST['txt_Razon_social'];	$dato20 = $_POST['txt_Direccion_fiscal'];	$dato21 = $_POST['txt_Sexo'];
	$dato22 = $_POST['txt_Ocupacion'];		$dato23 = $_POST['txt_Nivel'];				$dato24 = $_POST['txt_Medio'];
	$dato25 = $_POST['txt_Contacto'];		$dato26 = $_POST['txt_Estado'];				$dato27 = $_POST['txt_Colonia2'];
	$dato28 = $_POST['txt_Ciudad2'];		$dato29 = $_POST['txt_Estado2'];			$dato30 = $_POST['txt_CP2'];
	$dato31 = $_POST['txt_Tipo_alumno'];	$dato32 = $_POST['txt_Razon'];				$dato33 = $_POST['txt_Objetivo'];
    
	$query_nueva_reservacion = "UPDATE `alumnos` SET `Nombre`='".$dato1."',`Apaterno`='".$dato2."',`Amaterno`='".$dato3."',
	`NombreCom`='".$dato4."',`Direccion`='".$dato5."',`Colonia`='".$dato6."',`CP`='".$dato7."',`Ciudad`='".$dato8."',`Fecha_nacimiento`='".$dato9."',
	`Telefono`='".$dato10."',`Telefono2`='".$dato11."',`Celular`='".$dato12."',`Escuela`='".$dato13."',`Fecha_ingreso`='".$dato14."',
	`Baja`='".$dato15."',`CURP`='".$dato16."',`Email`='".$dato17."',`RFC`='".$dato18."',`Razon_social`='".$dato19."',`Direccion_fiscal`='".$dato20."',
	`Sexo`='".$dato21."',`Ocupacion`='".$dato22."',`Nivel`='".$dato23."',`Medio`='".$dato24."',`Contacto`='".$dato25."',`Estado`='".$dato26."',
	`Colonia2`='".$dato27."',`Ciudad2`='".$dato28."',`Estado2`='".$dato29."',`CP2`='".$dato30."',`Tipo_alumno`='".$dato31."',`Razon`='".$dato32."',
	`Objetivo`='".$dato33."' WHERE ID='".$buscar_alumnos."';";
	


	$resultado=$mysqli->query($query_nueva_reservacion);

?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha creado el alumno - '.$dato1; ?>");
  </script>
<script language="javascript">location.href = "alumnos.php";</script>

</html>
