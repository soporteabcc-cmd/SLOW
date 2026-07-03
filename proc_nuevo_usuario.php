<?php


			$hora_actual=date("Y-m-d")."T".date("H:i:s");

	require('conexion.php');

	$dato1 = $_POST['txt_login'];		$dato2 = $_POST['txt_nombre'];		
	$dato3 = $_POST['txt_apaterno'];	$dato4 = $_POST['txt_amaterno'];		
	$dato5 = $_POST['txt_perfil'];		$dato6 = $_POST['txt_ini'];
	$dato7 = $_POST['txt_contrasena'];	$dato8 = $_POST['txt_escuela'];		
	$dato9 = $_POST['txt_baja'];	

   
	$query_max_re="SELECT count(ID) as total FROM `usuarios`";

	  	$resultado=$mysqli->query($query_max_re);
  		$row=$resultado->fetch_assoc();

	$id_max_re= ($row["total"]);
	$id_max_res= $id_max_re+1;

	$query_nueva_reservacion = "INSERT INTO `usuarios`(`ID`, `Login`, `Nombre`, `Apaterno`, `Amaterno`, `Perfil`, `Ini`, `Contrasena`, `Escuela`, `Baja`) VALUES ('
	".$id_max_res."','".$dato1."','".$dato2."','".$dato3."','".$dato4."','".$dato5."','".$dato6."','".$dato7."','".$dato8."','".$dato9."');";


	$resultado=$mysqli->query($query_nueva_reservacion);



?>

<!DOCTYPE html>
<script>
    alert("<?php echo 'Se ha creado el Usuario - '.$dato1; ?>");
  </script>
<script language="javascript">location.href = "usuarios.php";</script>
</html>
