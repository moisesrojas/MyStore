<?php
	//CONSULTA PARA SELECCIONAR LOS PRODUCTOS DE LA CATEGORIA DRAMA
	$consulta_drama = "SELECT * FROM Relacion_Productos_Categorias WHERE id_categoria = 1";
	
	//EJECUTAMOS LA CONSULTA
	$resultado_drama = mysqli_query($conexion, $consulta_drama);
	
	//CICLO PARA ALMACENAR LOS ID'S DE LOS PRODUCTOS Y GENERAR UNA NUEVA CONSULTA
	while ($row = mysqli_fetch_assoc($resultado_drama)){
		$id_producto = $row['id_producto'];
	
	//CONSULTA LA INFORMACIÓN DE LOS PRODUCTOS ELEGIDOS POR LA PRIMERA CONSULTA
	
	$consulta_producto_individual = "SELECT * FROM Productos WHERE id = $id_producto";
	//EJECUTAMOS LA CONSULTA
	$resultado_producto_individual = mysqli_query($conexion, $consulta_producto_individual);
	while ($row2 = mysqli_fetch_assoc($resultado_producto_individual)){ 
	echo "<div>";
	echo "<div>" . $row2['clave_producto'] . "</div>";
	echo "<div>" . $row2['nombre_producto'] . "</div>";
	echo "</div>";
	}	
	}
?>