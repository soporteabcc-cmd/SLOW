<?php


			$hora_actual=date("Y-m-d")."T".date("H:i:s");

	require('conexion.php');

	$dato1 = $_POST['txt_nombre'];	$dato2 = $_POST['txt_Apaterno'];	$dato3 = $_POST['txt_Amaterno'];
	$dato4 = $_POST['txt_NombreCom'];	$dato5 = $_POST['txt_Direccion'];	$dato6 = $_POST['txt_Colonia'];
	$dato7 = $_POST['txt_CP'];	$dato8 = $_POST['txt_Ciudad'];	$dato9 = $_POST['txt_Fecha_nacimiento'];
	$dato10 = $_POST['txt_Telefono'];	$dato11 = $_POST['txt_Telefono2'];	$dato12 = $_POST['txt_Celular'];
	$dato13 = $_POST['txt_Escuela'];	$dato14 = $_POST['txt_Fecha_ingreso'];	$dato15 = $_POST['txt_Baja'];

	$dato16 = $_POST['txt_CURP'];	$dato17 = $_POST['txt_Email'];	$dato18 = $_POST['txt_RFC'];
	$dato19 = $_POST['txt_Razon_social'];	$dato20 = $_POST['txt_Direccion_fiscal'];	$dato21 = $_POST['txt_Sexo'];
	$dato22 = $_POST['txt_Ocupacion'];	$dato23 = $_POST['txt_Nivel'];	$dato24 = $_POST['txt_Medio'];
	$dato25 = $_POST['txt_Contacto'];	$dato26 = $_POST['txt_Estado'];	$dato27 = $_POST['txt_Colonia2'];
	$dato28 = $_POST['txt_Ciudad2'];	$dato29 = $_POST['txt_Estado2'];	$dato30 = $_POST['txt_CP2'];
	




	$dato31 = $_POST['txt_Tipo_alumno'];	$dato32 = $_POST['txt_Razon'];	$dato33 = $_POST['txt_Objetivo'];
	$dato34 = $_POST['txt_relacion'];
    
	$query_max_re="SELECT count(ID) as total FROM `alumnos`";

	  	$resultado=$mysqli->query($query_max_re);
  		$row=$resultado->fetch_assoc();

	$id_max_re= ($row["total"]);
	$id_max_res= $id_max_re+1;

	$query_nueva_reservacion = "INSERT INTO `alumnos`(`ID`, `Nombre`, `Apaterno`, `Amaterno`, `NombreCom`, `Direccion`, 
	`Colonia`, `CP`, `Ciudad`, `Fecha_nacimiento`, `Telefono`, `Telefono2`, `Celular`, `Escuela`, `Fecha_ingreso`, `Baja`, 
	`CURP`, `Email`, `RFC`, `Razon_social`, `Direccion_fiscal`, `Sexo`, `Ocupacion`, `Nivel`, `Medio`, `Contacto`, `Estado`, 
	`Colonia2`, `Ciudad2`, `Estado2`, `CP2`, `Tipo_alumno`, `Razon`, `Objetivo`, `grupo`, `relacion`) VALUES ('LR0".$id_max_res."','".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."','".$dato8."','".$dato9."','".$dato10.
	"','".$dato11."','".$dato12.

	"','".$dato13."','".$dato14."','".$dato15."','".$dato16.
	"','".$dato17."','".$dato18."','".$dato19."','".$dato20.
	"','".$dato21."','".$dato22.

	"','".$dato23."','".$dato24."','".$dato25."','".$dato26.
	"','".$dato27."','".$dato28."','".$dato29."','".$dato30.
	"','".$dato31."','".$dato32."','".$dato33."','','".$dato34."');";


	$resultado=$mysqli->query($query_nueva_reservacion);

?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha creado el alumno - '.$dato1; ?>");
  </script>
<script language="javascript">location.href = "alumnos.php";</script>
</html>
