<?php 




//crear variables




//conexion


 $conexion = sqlite_open('movil.db') or die ('lo siento no ha podido conectarse');


//Consulta

$consulta = 

<<<SQL

INSERT INTO usuarios VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[password]','$_POST[email]')

SQL;

//Ejecuto

$resultado = sqlite_exec($conexion,$consulta);

//Cierro
sqlite_close($conexion);


//Y vuelvo
echo '
<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=Registro.php">
	</head>
</html>
'; 

?>