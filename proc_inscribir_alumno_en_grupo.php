<?php


			$hora_actual=date("Y-m-d");

	require('conexion.php');

	$ID = $_POST['txt_id'];
	$nivel = $_POST['txt_nivel'];
	$costo_inscripcion = $_POST['txt_costo_inscripcion'];
	$metodo = $_POST['txt_metodo'];
	$ciclo = $_POST['txt_ciclo'];

	$query_max_recibo="SELECT count(id_Movimiento_Caja) as total FROM `cajas`";

	  	$resultado=$mysqli->query($query_max_recibo);
  		$row=$resultado->fetch_assoc();

	$id_max_recibo= ($row["total"]);
	$id_max_res_recibo= $id_max_recibo+1;


	$query_nueva_reservacion = "UPDATE `alumnos` SET `Nivel`='".$nivel."' WHERE ID='".$ID."';";
	$resultado=$mysqli->query($query_nueva_reservacion);

	$query_nueva_caja = "INSERT INTO `cajas`(`Id_Movimiento_Caja`, `id_alumno`, `Id_Registro_Mov`, `Escuela`, `Pago`, `Concepto`, `Fecha`, `Forma_pago`) VALUES ('INSC".
	$id_max_res_recibo."','".$ID."','CA".$id_max_res_recibo."','Lowry','".$costo_inscripcion."','Inscripcion','".$hora_actual."','".$metodo."');";
	$resultado=$mysqli->query($query_nueva_caja);
	
	$query_colegiaturas = "INSERT INTO `colegiaturas`(`id_alumno`, `ciclo`, `mes`, `monto`, `forma_pago`, `fecha_pago`, `id_poliza`) VALUES 
	('".$ID."','".$ciclo."','Septiembre','0','','',''),
	('".$ID."','".$ciclo."','Octubre','0','','',''),
	('".$ID."','".$ciclo."','Noviembre','0','','',''),
	('".$ID."','".$ciclo."','Diciembre','0','','',''),
	('".$ID."','".$ciclo."','Enero','0','','',''),
	('".$ID."','".$ciclo."','Febrero','0','','',''),
	('".$ID."','".$ciclo."','Marzo','0','','',''),
	('".$ID."','".$ciclo."','Abril','0','','',''),
	('".$ID."','".$ciclo."','Mayo','0','','',''),
	('".$ID."','".$ciclo."','Junio','0','','',''),
	('".$ID."','".$ciclo."','Julio','0','','',''),
	('".$ID."','".$ciclo."','Agosto','0','','','');";
	

	$resultado=$mysqli->query($query_colegiaturas);



	
?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado la inscripcion correctamente. - '.$ID; ?>");
  </script>
<script language="javascript">location.href = ("<?php echo 'recibo.php?recibo=INSC'.$id_max_res_recibo; ?>");</script>
</html>
