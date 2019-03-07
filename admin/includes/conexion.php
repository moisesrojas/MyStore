<?php
$usuario_bd = "root";
$pass_bd = "root";
$nombre_bd = "store";
$localhost = "localhost";
$conexion = mysqli_connect($localhost,$usuario_bd,$pass_bd,$nombre_bd);

if (!$conexion){
	die("Falló la conexión" . mysqli_connect_error());
}
//echo "conexión exitosa";
?>