<?php
include_once("conexion.php");
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$msg = $_POST['mensaje'];
$cabecera = "From: no-reply@mystore.com" . "\r\n" . "CCO: $correo";

if(mail("moises.rojas@iberoleon.mx",$asunto,$msg,$cabecera)){ 
	echo "Mensaje enviado exitosamente";
	$consulta_insertar = "INSERT INTO Contacto (nombre_completo,asunto,correo,mensaje) VALUES ('$nombre','$asunto','$correo','$msg')";
	mysqli_query($conexion,$consulta_insertar);
} else {
	echo "Ocurrió un error, intentalo más tarde";
}
?>