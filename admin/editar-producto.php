<?php
//INCLUIMOS LA CONEXIÓN
include_once("includes/conexion.php");
$titulo_pagina = "Editar Producto - Administrador";
//CAPTURAMOS EL VALOR DE ID DE LA URL UTILIZANDO GET
$id = $_GET['id'];
//CONSULTA PARA TRAER LOS VALORES DEL REGISTRO SELECCIONADO
$consulta = "SELECT * FROM Productos WHERE id = $id";
//EJECUTAMOS LA CONSULTA Y LA GUARDAMOS EN UNA VARIABLE
$resultado = mysqli_query($conexion,$consulta);
//HACEMOS UN CICLO PARA ALMANCENAR LOS VALORES EN VARIABLES
while ($row = mysqli_fetch_assoc($resultado)){
	$clave = $row['clave_producto'];
	$nombre = $row['nombre_producto'];
	$descripcion = $row['decripcion_producto'];
	$precio = $row['precio'];
	$fecha = $row['fecha_lanzamiento']; 
}
 ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" >
	<title><?php echo $titulo_pagina; ?></title>
	</head>
	<body>
	<h1><?php echo $titulo_pagina; ?></h1>
	<!--MANDAMOS LA INFORMACIÓN DEL FORMULARIO AL ARCHIVO DE ACUTUALIZAR PRODUCTO -->
	<form action="includes/actualizar-producto.php" method="POST">
	
	<label for="clave_de_producto">Clave del producto / SKU </label>
	<input type="text" name="clave_producto" placeholder=" Clave del producto" value="<?php echo $clave; ?>"><br>
	
	<label for="nombre_producto">Nombre del producto </label>
	<input type="text" name="nombre_producto" placeholder="Nombre del producto" value="<?php echo $nombre; ?>"><br>
	
	<label for="descripcion_producto">Descripción del producto </label>
	<textarea name="descripcion" rows="8" col="40"><?php echo $descripcion; ?></textarea><br>
	
	<label for="precio">Precio</label>
	<input type="text" name="precio" placeholder="Precio del producto" value="<?php echo $precio; ?>"><br>
	
	<label for="fecha_lanzamiento">Fecha de lanzamiento</label>
	<input type="text" name="fecha_lanzamiento" placeholder="Fecha de lanzamiento" value="<?php echo $fecha; ?>"><br>
	<!--MANDAMOS EL ID COMO CAMPO TIPO OCULTO -->
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="submit" value="Actualizar Producto">
	</form>
	
	</body>
</html>