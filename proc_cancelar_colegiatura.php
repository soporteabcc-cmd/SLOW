<?php


			$hora_actual=date("Y-m-d");

	require('conexion.php');

	$ID = $_POST['txt_busqueda_alumnos'];
	$mes = $_POST['txt_mes'];

	$ciclo = $_POST['txt_ciclo'];


	$query_max_recibo="SELECT count(id_Movimiento_Caja) as total FROM `cajas`";

	  	$resultado=$mysqli->query($query_max_recibo);
  		$row=$resultado->fetch_assoc();

	$id_max_recibo= ($row["total"]);
	$id_max_res_recibo= $id_max_recibo+1;

	$query_nueva_caja = "INSERT INTO `cajas`(`Id_Movimiento_Caja`, `id_alumno`, `Id_Registro_Mov`, `Escuela`, `Pago`, `Concepto`, `Fecha`, `Forma_pago`) VALUES ('CANC".
	$id_max_res_recibo."','".$ID."','PA".$id_max_res_recibo."','Lowry','','CANCELACION','".$hora_actual."','');";
	$resultado=$mysqli->query($query_nueva_caja);
	
	
	$query_max_colegiatura = "SELECT * FROM `colegiaturas` WHERE id_alumno='".$ID."' AND mes='".$mes."';";

	  	$resultado=$mysqli->query($query_max_colegiatura);
  		$row=$resultado->fetch_assoc();

	$total = ($row["monto"]);
	$monto_nuevo ="0";

	$query_actualiza_colegiatura = "UPDATE `colegiaturas` SET `monto`='".$monto_nuevo."',`fecha_pago`='".$hora_actual."',`id_poliza`='CANC".$id_max_res_recibo."' WHERE id_alumno='".$ID."' AND mes='".$mes."' AND ciclo='".$ciclo."';";

	$resultado=$mysqli->query($query_actualiza_colegiatura);
	


?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado la cancelacion correctamente. - '.$ID; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'recibo.php?recibo=COLG'.$id_max_res_recibo; ?>");</script>
</html>
