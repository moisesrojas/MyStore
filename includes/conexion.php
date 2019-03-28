<?php
$usuario_bd = "root";
$pass_bd = "root";
$nombre_bd = "store";
$localhost = "localhost";
$conexion = mysqli_connect($localhost,$usuario_bd,$pass_bd,$nombre_bd);
mysqli_set_charset($conexion,"utf8");

if (!$conexion){
	die("Falló la conexión" . mysqli_connect_error());
}
//echo "conexión exitosa";
?>