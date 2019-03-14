<?php $titulo_pagina = "Nuevo Producto - Administrador"; ?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" >
	<title><?php echo $titulo_pagina; ?></title>
	<script src="js/ckeditor/ckeditor.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	
	<script>
	  $( function() {
	    $( "#fecha_lanzamiento" ).datepicker({
		    showOn: "both",
		    dateFormat:"yy-mm-dd",
		    monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
		    dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
		    dayNamesMin: ["Do","Lu","Ma","Mi","Ju","Vi","Sa"],
		    changeMonth: true,
		    changeYear: true
	    });
	  } );
	  </script>
	
	</head>
	<body>
	<h1><?php echo $titulo_pagina; ?></h1>
	
	<form action="includes/insertar-producto.php" method="POST" enctype="multipart/form-data">
	
	<label for="clave_de_producto">Clave del producto / SKU </label>
	<input type="text" name="clave_producto" placeholder=" Clave del producto"><br>
	
	<label for="nombre_producto">Nombre del producto </label>
	<input type="text" name="nombre_producto" placeholder="Nombre del producto"><br>
	
	
	<label for="descripcion_producto">Descripción del producto </label>
	<textarea id="descripcion" name="descripcion" rows="8" col="40"></textarea><br>
	<!--EJECUTAMOS EL PLUGIN PARA MOSTRAR EL EDITOR WYSIWYG-->
	<script>CKEDITOR.replace( 'descripcion' );</script>
	
	
	<label for="portada">Portada</label>
	<input type="file" name="portada" id="portada"><br>
	
	<label for="precio">Precio</label>
	<input type="text" name="precio" placeholder="Precio del producto"><br>
	
	<label for="fecha_lanzamiento">Fecha de lanzamiento</label>
	<input type="text" name="fecha_lanzamiento" id="fecha_lanzamiento" placeholder="Fecha de lanzamiento"><br>
	
	<input type="submit" value="Agregar Producto">
	</form>
	
	</body>
</html>