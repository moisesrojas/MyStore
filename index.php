<?php
$titulo_pagina = "Mi tienda";
//INCLUIR LA CONEXIÓN A LA BD
include_once("includes/conexion.php");
//CONSULTA DE CATEGORÍAS
$consulta_categorias = "SELECT * FROM Categorias";
//EJECUTAMOS Y ALMACENAMOS EN UNA VARIABLE EL RESULTADO DE LA CONSULTA
$resultado_categorias = mysqli_query($conexion, $consulta_categorias);

//TOTAL DE CATEGORÍAS
$total_resultados = mysqli_num_rows($resultado_categorias);

?>
<!doctype html>
<html>
	<head>
		<title><?php echo $titulo_pagina; ?></title>
	</head>
	<body>
		<h1><?php echo $titulo_pagina; ?></h1>
	<?php echo "<p>Existen " . $total_resultados . " Categorías</p>"; 
	
	if ($total_resultados > 0){
		while($row = mysqli_fetch_assoc($resultado_categorias)){ 
	echo "<div>";
	echo "<a href='detalle-categoria.php?id=" . $row['id_cat'] . "'>" . $row['nombre_categoria'] . "</a>";
	echo "</div>";
		}
		
		
	} else { 
		echo "<h3> No hay categorías para mostrar </h3>";
	}
	
	?>
	<h1>PRODUCTOS DESTACADOS DRAMA</h1>
	<?php
	include_once("includes/destacados-drama.php");
	?>
	
		
	</body>
</html>