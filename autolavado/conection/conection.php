<?php

$servidor    = "localhost";
$usuario     = "id16153726_autolavadotun";
$contrasenia = "tGece&d=Szw]1SH]";
$BD          = "id16153726_autolavado";

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $BD);

if (!$conexion) {
	echo "Falló la conexión <h1>";
	die ("Connection failed: " . msqli_connect_error());
}
else{
	echo "Conexión exitosa <h1>";
}
	
?>