<?php
//
ob_start();
//INCLUIMOS LA CONEXIÓN
include_once("conexion.php");
//OBTENEMOS EL VALOR DE ID DE LA URL
$id = $_GET['id'];
//SENTENCIA SQL DE ELIMINAR !!! IMPORTANTE COLOCAR LA CLAUSULA WHERE !!!
$consulta_eliminar = "DELETE FROM Productos WHERE id = $id";
//EJECUTAMOS LA SENTENCIA SQL
mysqli_query($conexion, $consulta_eliminar);
//AL FINAL REDIRECCIONAMOS AL ADMINISTRADOR AL INDEX
header('Location:../index.php');
ob_end_flush();
?>