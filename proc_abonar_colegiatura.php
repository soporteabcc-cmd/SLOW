<?php


			$hora_actual=date("Y-m-d");

	require('conexion.php');

	$ID = $_POST['txt_busqueda_alumnos'];
	$mes = $_POST['txt_mes'];
	$monto = $_POST['txt_monto'];
	$forma_pago = $_POST['txt_forma_pago'];
	$ciclo = $_POST['txt_ciclo'];


	$query_max_recibo="SELECT count(id_Movimiento_Caja) as total FROM `cajas`";

	  	$resultado=$mysqli->query($query_max_recibo);
  		$row=$resultado->fetch_assoc();

	$id_max_recibo= ($row["total"]);
	$id_max_res_recibo= $id_max_recibo+1;

	$query_nueva_caja = "INSERT INTO `cajas`(`Id_Movimiento_Caja`, `id_alumno`, `Id_Registro_Mov`, `Escuela`, `Pago`, `Concepto`, `Fecha`, `Forma_pago`) VALUES ('COLG".
	$id_max_res_recibo."','".$ID."','PA".$id_max_res_recibo."','Lowry','".$monto."','Colegiatura','".$hora_actual."','".$forma_pago."');";
	$resultado=$mysqli->query($query_nueva_caja);
	
	
	$query_max_colegiatura = "SELECT * FROM `colegiaturas` WHERE id_alumno='".$ID."' AND mes='".$mes."';";

	  	$resultado=$mysqli->query($query_max_colegiatura);
  		$row=$resultado->fetch_assoc();

	$total = ($row["monto"]);
	$monto_nuevo =	$total + $monto;

	$query_actualiza_colegiatura = "UPDATE `colegiaturas` SET `monto`='".$monto_nuevo."',`forma_pago`='".$forma_pago."',`fecha_pago`='".$hora_actual."',`id_poliza`='COLG".$id_max_res_recibo."' WHERE id_alumno='".$ID."' AND mes='".$mes."' AND ciclo='".$ciclo."';";

	$resultado=$mysqli->query($query_actualiza_colegiatura);
	


?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado la inscripcion correctamente. - '.$ID; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'recibo.php?recibo=COLG'.$id_max_res_recibo; ?>");</script>
</html>
