<?php
ob_start();
//INCLUIMOS LA CONEXIÓN A LA BASE DE DATOS
include_once("conexion.php");
//CAPTURAMOS EN VARIABLES LA INFORMACIÓN PASADA POR EL MÉTODO POST A TRAVÉS DEL FORMULARIO INCLUYEDO EL ID
$clave = $_POST['clave_producto'];
$nombre = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha_lanzamiento'];
$id = $_POST['id'];
//DECLARAMOS LA SENTENCIA SQL PARA ACTUALIZAR CON LA NUEVA INFORMACIÓN
$consulta_actualizar = "UPDATE Productos SET clave_producto = '$clave', nombre_producto = '$nombre', descripcion_producto = '$descripcion', precio = '$precio', fecha_lanzamiento = '$fecha' WHERE id = '$id'";
//EJECTUA LA CONSULTA
mysqli_query($conexion,$consulta_actualizar);
//REDIRIGIMOS AL INDEX
header('Location:../index.php');
ob_end_flush();
?>