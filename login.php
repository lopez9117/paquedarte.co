<?php 

//++++++++++++inicio variables+++++++++++++++

session_start();


//+++++++++++++++++++obtengo parametros de el index++++++++++++++++++++++++

$usuario =$_POST['user'];
$contrasena = $_POST['contrasena'];

//++++++++++++establesco la conexion *************

$conexion = sqlite_open('movil.php') or die ('lo siento a ocurrido un fallo en la conexion')


//++++++++++++preparo la consulta++++++++++++++++++++

$consulta = "SELECT * fROM usuarios;  ";






	


//+++++++++++ejecuto la consulta+++++++++

$resultado = sqlite_queary($conexion,$consulta);








//+++++++++++++Cierro la consulta ****************+++


sqlite_close($conexion);




 ?>