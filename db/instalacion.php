<?php


//################  crear la tabla de usuarios   #################
//conexion
$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =
<<<SQL

CREATE TABLE usuarios(


nombre Char(40),
apellido Char(40),
contrasena Char(40), 
email Char(80)
);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);	

//################  insertaremos contenido de prueba en la tabla de usaurios   #################
//conexion
/*$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion

$consulta =

<<<SQL
INSERT INTO usuarios VALUES(1,'luis','lopez','1234','luiselm017@hotmail.com');
SQL;

//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion); */


//################  crear la tabla publicacion   #################
//conexion
/*$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =
<<<SQL

CREATE TABLE publicacion(

id int Not Null,
valor Char(40),
direccion Char(40),
descripcion char(100),
tipo_inmueble char (30),
id_usuario int

);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion); */

//################   insertaremos contenido de prueba en la tabla publicacion  #################
//conexion
 /*$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =

<<<SQL
INSERT INTO publicacion VALUES(1,300000,'la consolata','casa de 2 pisos con dos cuartos grandes y patio trasero','apartamento',1);
SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion); */


//################  crear la tabla servicios  #################
//conexion
/*$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =
<<<SQL

CREATE TABLE imagenes(
id Int Not Null,
i1 Char(80),
i2 Char(120),
i3 Char(200),
i4 Char(80),
id_publicacion Char(200)
);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion); */

/*//################   insertaremos contenido de prueba en la tabla imagenes #################
//conexion
$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =

<<<SQL
INSERT INTO imagenes VALUES(1,'imagen','imagen','imagen','sonido','1');
SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion);*/

//################   crear la tabla servicios  #################
//conexion
/*$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =
<<<SQL

CREATE TABLE servicios(
id Int Not Null,
amueblada char (10),
tv char (10),
calefaccion char(10),
internet char(10),
alimentacion char (10),
baño char(10),
telefono Char(80),
aire Char(300),
mascota Char(80),
fumar Char(80),
lavanderia char(10),
aseo char(10),
id_publicacion int
);

SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion); */


//################   insertaremos contenido de prueba en la tabla servicios  #################
//conexion
/*$conexion = sqlite_open('movil.db') or die('Ha sido imposible establecer la conexion');
//peticion
$consulta =

<<<SQL
INSERT INTO servicios VALUES(1,'si','si','si','si','si','si','si','si','si','no','no','no',1);
SQL;
//ejecutar
$resultado = sqlite_exec($conexion,$consulta);
//cerrar
sqlite_close($conexion); */

?>
