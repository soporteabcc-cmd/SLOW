<?php

			$hora_actual = date("d/m/Y");

	require('conexion.php');

	$id_venta = $_POST['txt_id_venta'];
	$id_producto = $_POST['txt_descripcion_producto'];
	$cantidad = $_POST['txt_cantidad'];
	
	$query_usqueda_factura = "SELECT * FROM `ventas_alumnos` WHERE id_venta='".$id_venta."'";
		$resultado=$mysqli->query($query_usqueda_factura);
		$row=$resultado->fetch_assoc();
		
	$monto = ($row["monto"]);
	
		$query_busqueda_producto = "SELECT * FROM `inventario_lowry` WHERE id_producto='".$id_producto."';";
		$resultado=$mysqli->query($query_busqueda_producto);
		$row=$resultado->fetch_assoc();
		
	$descripcion = ($row["descripcion"]);
	$costo = ($row["costo"]);	
	$costo_total = $costo*$cantidad;
	
	$costo_atualizado = $monto + $costo_total;
	$costo_atualizado_iva = $costo_atualizado * 0.16;
	$costo_atualizado_iva_suma = $costo_atualizado * 1.16;


	$query_agregar_detalle = "INSERT INTO `ventas_alumno_detalle`(`id_venta`, `id_producto`, `descripcion`, `cantidad`, `costo`) VALUES ('".
	$id_venta."','".$id_producto."','".$descripcion."','".$cantidad."','".$costo_total."');";
	$resultado=$mysqli->query($query_agregar_detalle);

	$query_agregar_detalle_fcatura = "UPDATE `ventas_alumnos` SET `monto`='".$costo_atualizado."',`iva`='".$costo_atualizado_iva."',`total`='".$costo_atualizado_iva_suma."' WHERE id_venta='".$id_venta."';";
	$resultado=$mysqli->query($query_agregar_detalle_fcatura);

?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado la venta con el producto correctamente. - LOW'.$id_venta; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'venta_alumno_detalle.php?recibo='.$id_venta; ?>");</script>

</html>
