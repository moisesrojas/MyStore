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

//RUTA DEL THUMB
$directorio_thumb = '../img/portadas/thumbs/thumb_';
$nombre_final_thumb = $directorio_thumb . $nombre_final_archivo;

//DEFINIMOS EL ARCHIVO DE ORIGEN (ABRIR)
$imagen_o = imagecreatefromjpeg($directorio_archivos . $nombre_final_archivo);

//DEFINIMOS EL NUEVO TAMAÑO
$width = 300;
$height = 300;

//LEEMOS las dimensiones del archivo de origen
$width_o = imagesx($imagen_o);
$height_o = imagesy($imagen_o);

//HACEMOS EL RESIZE DE MANERA PROPORCIONAL
$proporcion = $width_o/$height_o;
if ($width/$height > $proporcion){
	$width = $height*$proporcion;
} else {
	$height = $width/$proporcion;
}

//DEFINIMOS EL CANVAS DE LA NUEVA IMAGEN
$imagen_t = imagecreatetruecolor($width,$height);

//ESCRIBIMOS EL CANVAS CON LA SIGUIENTE INFORMACIÓN
imagecopyresampled($imagen_t, $imagen_o, 0,0,0,0, $width, $height, $width_o, $height_o);
imagejpeg($imagen_t, $nombre_final_thumb, 90);

} else { 
	echo "Sólo puedes subir imágenes .jpg, .gif o .png";
}

//DECLARAMOS LA SENTENCIA SQL PARA INGRESAR LOS DATOS A LA TABLA PRODUCTOS
$consulta_insertar = "INSERT INTO Productos (clave_producto, nombre_producto, descripcion_producto, imagen_producto, precio, fecha_lanzamiento, thumb_imagen) VALUES ('$clave','$nombre','$descripcion','$nombre_final_archivo',$precio,'$fecha', '$nombre_final_thumb')";

//EJECUTAMOS LA CONSULTA CON LA CONEXIÓN Y LA SENTENCIA SQL INSERT INTO
mysqli_query($conexion, $consulta_insertar);

//REDIRECCIONAMOS AL ADMINISTRADOR AL INDEX DE ADMIN
header('Location:../index.php');
ob_end_flush();
?>