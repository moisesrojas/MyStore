<?php $titulo_pagina = "Nuevo Producto - Administrador"; ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" >
	<title><?php echo $titulo_pagina; ?></title>
	</head>
	<body>
	<h1><?php echo $titulo_pagina; ?></h1>
	
	<form action="includes/insertar-producto.php" method="POST">
	
	<label for="clave_de_producto">Clave del producto / SKU </label>
	<input type="text" name="clave_producto" placeholder=" Clave del producto"><br>
	
	<label for="nombre_producto">Nombre del producto </label>
	<input type="text" name="nombre_producto" placeholder="Nombre del producto"><br>
	
	<label for="descripcion_producto">Descripción del producto </label>
	<textarea name="descripcion" rows="8" col="40"></textarea><br>
	
	<label for="precio">Precio</label>
	<input type="text" name="precio" placeholder="Precio del producto"><br>
	
	<label for="fecha_lanzamiento">Fecha de lanzamiento</label>
	<input type="text" name="fecha_lanzamiento" placeholder="Fecha de lanzamiento"><br>
	
	<input type="submit" value="Agregar Producto">
	</form>
	
	</body>
</html>