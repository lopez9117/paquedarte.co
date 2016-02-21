<?php

session_start();

$conexion = sqlite_open('movil.db');



$titulo = $_GET['nombre'];
$direccion = $_GET['apellido'];
$categoria = $_GET['password'];
$comentario = $_GET['email'];



$consulta = "DELETE FROM usuarios WHERE  nombre='".$titulo."' AND apellido='".$direccion."' AND contrasena='".$categoria."' AND email='".$comentario."' ";

$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);
	
echo'

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';

?>
