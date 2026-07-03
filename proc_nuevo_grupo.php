<?php


			$hora_actual=date("Y-m-d")."T".date("H:i:s");

	require('conexion.php');

	$dato1 = $_POST['txt_generacion'];		$dato2 = $_POST['txt_inicia'];
	$dato3 = $_POST['txt_periodo'];			$dato4 = $_POST['txt_fecha_inicia'];
	$dato5 = $_POST['txt_ciclo'];			$dato6 = $_POST['txt_nivel'];
	$dato7 = $_POST['txt_horario'];			$dato8 = $_POST['txt_id_curso'];
	$dato9 = $_POST['txt_curso'];			$dato10 = $_POST['txt_sufijo'];
	$dato11 = $_POST['txt_cupo'];			$dato12 = $_POST['txt_ocupado'];
	$dato13 = $_POST['txt_horas'];			$dato14 = $_POST['txt_escuela'];
	$dato15 = $_POST['txt_libre'];			$dato16 = $_POST['txt_profesor'];
	$dato17 = $_POST['txt_salon'];			$dato18 = $_POST['txt_nombre_salon'];
	$dato19 = $_POST['txt_cerrado'];		$dato20 = $_POST['txt_lleno'];	
	$dato21 = $_POST['txt_activo'];



	$query_nueva_reservacion = "INSERT INTO `grupos`(`Id_grupo`, `Generacion`, `Iniciacion`, `periodo`, 
`Fecha_inic`, `Ciclo`, `Nivel`, `Horario`, `Id_curso`, `Curso`, `Sufijo`, `Cupo`, `Ocupado`, `Horas`, `Escuela`, 
`Libre`, `Profesor`, `Salon`, `Salon_nombre`, `Cerrado`, `Lleno`, `Activo`) 
VALUES ('".$id_max_res."','".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."','".$dato8."','".$dato9."','".$dato10.
	"','".$dato11."','".$dato12."','".$dato13."','".$dato14."','".$dato15."','".$dato16.
	"','".$dato17."','".$dato18."','".$dato19."','".$dato20."','".$dato21."');";


	$resultado=$mysqli->query($query_nueva_reservacion);



?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha creado el alumno - '.$dato1; ?>");
  </script>
<script language="javascript">location.href = "alumnos.php";</script>
</html>
