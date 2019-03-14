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

//CAPTURAMOS LA INFORMACIÓN DEL ARCHIVO EN VARIABLES
echo $nombre_archivo = $_FILES['portada']['name'];
echo $tipo_archivo = $_FILES['portada']['type'];
echo $tmp_archivo = $_FILES['portada']['tmp_name'];

//DEFININIMOS EL DIRECTORIO DE IMÁGENES
$directorio_archivos = "../img/portadas/";

//DEFINIMOS TIPOS DE ARCHIVO PERMITIDOS
$tipos_permitidos = array('image/jpeg','image/jpg','image/pjpeg','image/gif','image/png','image/x-png');

//VALIDAMOS SI EL TIPO DE ARCHIVO COINCIDE CON LOS TIPOS PERMITIDOS
if (in_array($tipo_archivo,$tipos_permitidos)){

//RENOMBRAMOS EL ARCHIVO CONCATENANDO LA HORA EXACTA EN QUE FUE CARGADO	
$nombre_final_archivo = date("His") . $nombre_archivo;

//MOVEMOS EL ARCHIVO DE LA CARPETA TEMPORAL A LA CARPETA IMG
move_uploaded_file($tmp_archivo,$directorio_archivos . $nombre_final_archivo);

} else { 
	echo "Sólo puedes subir imágenes .jpg, .gif o .png";
}

//DECLARAMOS LA SENTENCIA SQL PARA INGRESAR LOS DATOS A LA TABLA PRODUCTOS
$consulta_insertar = "INSERT INTO Productos (clave_producto, nombre_producto, descripcion_producto, precio, fecha_lanzamiento) VALUES ('$clave','$nombre','$descripcion',$precio,'$fecha')";

//EJECUTAMOS LA CONSULTA CON LA CONEXIÓN Y LA SENTENCIA SQL INSERT INTO
//mysqli_query($conexion, $consulta_insertar);

//REDIRECCIONAMOS AL ADMINISTRADOR AL INDEX DE ADMIN
//header('Location:../index.php');
ob_end_flush();
?>