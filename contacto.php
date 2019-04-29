<?php $titulo_pagina = "Formulario de Contacto"; ?>
<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
	<title><?php echo $titulo_pagina; ?></title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
		
		 $("#formulario").submit(function(e){ 
			 e.preventDefault();
			 $.ajax({ 
				url: "includes/enviar_correo.php",
				type: "post",
				data: $("#formulario").serialize(),
				success: function(respuesta){ 
				$("#respuesta").html(respuesta);
				$("#respuesta").effect("bounce");
				 }
			 });
		 });
		});
	</script>
		  
	</head>
	<body>
	<h1><?php echo $titulo_pagina; ?></h1>	
	<form id="formulario">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="" id="nombre"><br>
	<label for="correo">Correo</label>
	<input type="text" name="correo" value="" id="correo"><br>
	<label for="asunto">Asunto</label>
	<input type="text" name="asunto" value="" id="asunto"><br>
	<textarea name="mensaje" cols="30" rows="10"></textarea><br>
	<input type="submit" value="Enviar">
	</form>
	<div id="respuesta"></div>
	</body>
</html>