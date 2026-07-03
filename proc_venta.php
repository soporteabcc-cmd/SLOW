<?php


			$hora_actual = date("Y-m-d");

	require('conexion.php');

	$ID = $_POST['txt_busqueda_alumnos'];
	$contribuyente = $_POST['txt_Apaterno'];
	$forma_pago = $_POST['txt_forma_pago'];
	$RFC = $_POST['txt_rfc'];
	$CP = $_POST['txt_cp'];

	$query_max_recibo="SELECT count(id_venta) as total FROM `ventas_alumnos`";

	  	$resultado=$mysqli->query($query_max_recibo);
  		$row=$resultado->fetch_assoc();

	$id_max_recibo= ($row["total"]);
	$id_max_res_recibo= $id_max_recibo+1;

	$query_nueva_caja = "INSERT INTO `ventas_alumnos`(`id_venta`, `id_alumno`, `contribuyente`, `monto`, `iva`, `total`, `forma_pago`, `fecha_pago`, `RFC`, `CP`, `id_poliza`) VALUES ('VENT".
	$id_max_res_recibo."','".$ID."','".$contribuyente."','0','0','0','".$forma_pago."','".$hora_actual."','".$RFC."','".$CP."','No Pagado');";
	$resultado=$mysqli->query($query_nueva_caja);
	
	

	


?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado la venta correctamente. - '.$ID; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'venta_alumno_detalle.php?recibo=VENT'.$id_max_res_recibo; ?>");</script>
</html>
