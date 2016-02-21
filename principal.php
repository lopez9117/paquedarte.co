<?php 


session_start();


//crear conexion
$conexion = sqlite_open('movil.db') or die ('no se ha podido establecer connexion');



echo "
<table border=1 width=1>
<tr>
<td>nombre </td>
<td>apellido </td>
<td>password </td>
<td> email </td>
<td> opcion </td>
<td> opcion 2 </td>
</tr>
";



//establecer consulta,//ejecutar consulta//imprimir consulta



           $query = sqlite_query($conexion,"select * from usuarios   ");
          if ($query) {
          while ($fila = sqlite_fetch_array($query)) {

         echo "<tr> <td>". $fila['nombre']."</td><td>".$fila['apellido']."</td><td>".$fila['contrasena']."</td><td>".$fila['email']."</td> <td> <a href= 'eliminarusuario.php?nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&password=".$fila['contrasena']."&email=".$fila['email']."'> Eliminar </a> </td> <td>  <a href= 'actualizarusuario.php?nombre=".$fila['nombre']."&apellido=".$fila['apellido']."&password=".$fila['contrasena']."&email=".$fila['email']."'> actualizar  </a> </td></tr>";
             }
                                              
      }else {
        die(print_r(sqlsrv_errors(), true));
             }



//cerrar consulta

sqlite_close($conexion);


 ?>