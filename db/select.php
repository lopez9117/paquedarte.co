<?php

echo"<table border=1><tr><td>nombre</td><td>apellido</td><td>pass</td><td>email</td></tr>";

$conexion = sqlite_open('movil.db');

//$consulta = "SELECT * FROM Discos WHERE Artista='U2' ORDER BY Anio DESC;";
$consulta = "SELECT * FROM usuario order by  nombre asc;";

$resultado = sqlite_query($conexion,$consulta);

while($fila = sqlite_fetch_array($resultado)){

echo "<tr><td>".$fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['pass']."</td><td>".$fila['email']."</td></tr>";

//echo $fila['Disco']." ".$fila['Artista']." ".$fila['Anio']."<br />";

}

echo "</table>";

sqlite_close($conexion);



?>