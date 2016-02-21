<?php

session_start();

$conexion = sqlite_open('movil.db');


//************guardo las variables***********************

$titulo = $_GET['nombre'];
$direccion = $_GET['apellido'];
$categoria = $_GET['password'];
$comentario = $_GET['email'];



//*****************conexion y consulta*************


$conexion = sqlite_open('movil.db') or die ('lo sentimos no ha podido conectarse') 


$consulta = "SELECT * FROM usuarios WHERE nombre='".$titulo."' AND apellido='".$direccion."' AND contrasena='".$categoria."' AND email='".$comentario."' ";

//*********ejecuto consulta **************+

$resultado = sqlite_query($conexion,$consulta);

echo "
<tr>
<td> nombre </td>	
<td> apellido</td>
<td> contrasena</td>
<td> email </td>
</tr>	
",

while ($fila = sqlite_fetch_array($resultado)){

echo "
<tr> <form action ='act_usu' method= 'POST'>
<td> <input type ='text ' name = 'nombre' value='".$fila['nombre']."' </td>
<td> <input type ='text ' name = 'apellido' value='".$fila['apellido']."' </td>
<td> <input type ='text ' name = 'contrasena' value='".$fila['contrasena']."' </td>
<td> <input type ='text ' name = 'email' value='".$fila['email']."' </td>	
<td> <input type 'submit'  </td>
</form>
</tr>


";


}

//+++++++++++++++++cierro conexion********************++
sqlite_close($conexion);



	

?>
