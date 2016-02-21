<?php

$conexion = sqlite_open('movil.db') or die('no hemos podido conectar');

$consulta =
<<<SQL

INSERT INTO usuarios values('felix ','martinez','1234','falmelm017@hotmail.com');




SQL;

$resultado= sqlite_exec($conexion,$consulta);

sqlite_close($conexion);




?>