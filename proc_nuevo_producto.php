<?php


			$hora_actual=date("Y-m-d");

	require('conexion.php');



	$descripcion = $_POST['txt_nombre'];
	$costo = $_POST['txt_costo'];



	$query_max_recibo="SELECT count(id_producto) as total FROM `inventario_lowry`";

	  	$resultado=$mysqli->query($query_max_recibo);
  		$row=$resultado->fetch_assoc();

	$id_max_recibo= ($row["total"]);
	$id_max_res_recibo= $id_max_recibo+1;

	$query_nueva_caja = "INSERT INTO `inventario_lowry`(`id_producto`, `descripcion`, `existencia`, `costo`) VALUES ('LOW".
	$id_max_res_recibo."','".$descripcion."','0','".$costo."');";
	$resultado=$mysqli->query($query_nueva_caja);
	
	

	


?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado el producto correctamente. - LOW'.$id_max_res_recibo; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'nuevo_producto.php'; ?>");</script>
</html>
