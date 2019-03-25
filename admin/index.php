<?php
//INCLUIMOS EL ARCHIVO DE CONEXIÓN
include_once("includes/conexion.php");
$titulo_pagina = "My Store";
//CONSULTA A LA TABLA PRODUCTOS
$consulta = "SELECT * FROM Productos";
//GUARDAMOS EN LA VARIABLA RESULTADO UN ARREGLO CON LA INFORMACIÓN DE LA CONSULTA
$resultado = mysqli_query ($conexion,$consulta);

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title><?php echo $titulo_pagina; ?> - Administrador</title>
	</head>
	<body>
	<h1><?php echo $titulo_pagina; ?> - Administrador</h1>
	<!-- INCLUIMOS EL MENÚ-->
	<?php include_once("includes/menu.php"); ?>
	<table>
	<tbody>
	<tr>
	<th>id</th>
	<th>Clave / SKU</th>
	<th>Nombre</th>
	<th>Precio</th>
	<th>Fecha de lanzamiento</th>
	<th>Imagen</th>
	<th>ELIMINAR</th>
	</tr>
	
		<?php
	//CICLO PARA MOSTRAR TODOS LOS RESULTADOS DE LA CONSULTA
		while ($row = mysqli_fetch_assoc ($resultado)){
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['clave_producto'] . "</td>";
		echo "<td><a href='editar-producto.php?id=" . $row['id'] . "'>" . $row['nombre_producto'] . "</a></td>";
		echo "<td>" . $row['precio'] . "</td>";
		echo "<td>" . $row['fecha_lanzamiento'] . "</td>";
		echo "<td><img src='img/portadas/thumbs/thumb_" . $row['imagen_producto'] . "'></td>";
	echo "<td><a href='includes/eliminar-producto.php?id=" . $row['id'] . "'>Borrar</a></td>";
		echo "</tr>";
		}
		?>

	</tbody>
	</table>
		
	</body>
</html>