<?php
	require('conexion.php');

	$matricula = $_POST['txt_matricula'];
	$pw = $_POST['txt_password'];
	
	if ($matricula=="")	{		$matricula="@";	}
	if ($pw=="")	{			$pw="@";	}

	$query = "SELECT * FROM usuarios WHERE Login='".$matricula."' and Contrasena='".$pw."'";
		$resultado=$mysqli->query($query);
		$row=$resultado->fetch_assoc();

		$id_pass= ($row["Contrasena"]);

					if ($id_pass==$pw) {
						session_start(); 
						$_SESSION["user"] = $row['ID']; 
				  	
					echo '<script> window.location="panel.php"; </script>';
				}
				else{
					echo '<script> alert("Usuario o password incorrectos.");</script>';
					echo '<script> window.location="index.html"; </script>';
				}	




?>
<!DOCTYPE html>
<html>
<head>
<head>
	<title>Validando...</title>
	<meta charset="utf-8">
</head>
</head>
<body>
	
</body>
</html>