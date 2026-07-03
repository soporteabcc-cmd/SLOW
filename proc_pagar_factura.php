<?php


			$hora_actual=date("Y-m-d");

	require('conexion.php');

	$ID = $_POST['txt_busqueda_alumnos'];

	$query_max_recibo="SELECT count(id_poliza) as total FROM `ventas_alumnos`";

	  	$resultado=$mysqli->query($query_max_recibo);
  		$row=$resultado->fetch_assoc();

	$id_max_recibo = ($row["total"]);
	$id_max_res_recibo = $id_max_recibo+1;

	$query_nueva_caja = "UPDATE `ventas_alumnos` SET `id_poliza`='POLI".$id_max_res_recibo."' WHERE id_venta='".$ID."';";echo $query_nueva_caja;

	$resultado=$mysqli->query($query_nueva_caja);


?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado el pago correctamente. - POLI'.$id_max_res_recibo; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'panel.php'; ?>");</script>
</html>
