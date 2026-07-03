<?php

			$hora_actual=date("Y-m-d");

	require('conexion.php');

	$ID = $_POST['txt_busqueda_alumnos'];
	$aumento = $_POST['txt_aumento'];

	$query_max_colegiatura = "SELECT * FROM `inventario_lowry` WHERE id_producto='".$ID."';";

	  	$resultado=$mysqli->query($query_max_colegiatura);
  		$row=$resultado->fetch_assoc();

	$total = ($row["existencia"]);
	$total = $total + $aumento;

	$query_actualiza_colegiatura = "UPDATE `inventario_lowry` SET `existencia`='".$total."' WHERE id_producto='".$ID."';";
	$resultado=$mysqli->query($query_actualiza_colegiatura);
	


?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha realizado la compra correctamente. - '.$ID; ?>");
  </script>

<script language="javascript">location.href = ("<?php echo 'agregar_exitencia.php'; ?>");</script>
</html>
