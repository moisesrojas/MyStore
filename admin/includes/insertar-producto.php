<?php
ob_start();
//INCLUIMOS EL ARCHIVO DE CONEXIÓN PARA TRABAJAR CON LA BASE DE DATOS
include_once("conexion.php");
//CAPTURAMOS EN VARIABLES LA INFORMACIÓN QUE PASAMOS DEL FORMULARIO CON EL MÉTODO POST
$clave = $_POST['clave_producto'];
$nombre = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$fecha = $_POST['fecha_lanzamiento'];

//DECLARAMOS LA SENTENCIA SQL PARA INGRESAR LOS DATOS A LA TABLA PRODUCTOS
$consulta_insertar = "INSERT INTO Productos (clave_producto, nombre_producto, descripcion_producto, precio, fecha_lanzamiento) VALUES ('$clave','$nombre','$descripcion',$precio,'$fecha')";

//EJECUTAMOS LA CONSULTA CON LA CONEXIÓN Y LA SENTENCIA SQL INSERT INTO
mysqli_query($conexion, $consulta_insertar);

//REDIRECCIONAMOS AL ADMINISTRADOR AL INDEX DE ADMIN
header('Location:../index.php');
ob_end_flush();
?>