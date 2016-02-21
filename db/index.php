<?php

session_start();


 $_SESSION['usuario'] = "lucho";

 $_SESSION['contrasena'] = "martinez";



echo'	

<html>
	<head>
		<meta http-equiv="REFRESH" content="0;url=principal.php">
	</head>
</html>

';



?>
