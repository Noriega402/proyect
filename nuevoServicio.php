<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nuevo Proveedor a nuesta Tienda</title>
	<link rel="stylesheet" type="text/css" href="estiloNuevoP.css">
</head>
<body>

	<div>
		<form action="crearServicio.php" class="formulario" method="post">
			<img src="zonagamer.png" class="logo__gamer">
			<h1 class="formulario__titulo">Nuevo Proveedor</h1>
			
			<label class="formulario__label">Nombre_Servicio:</label>
			<input type="text" name="Nombre_Servicio" class="formulario__input" required="">
			
			<label class="formulario__label">Duracion_Contrato:</label>
			<input type="phone" name="Duracion_Contrato" class="formulario__input" required="" maxlength="2" minlength="1">
			
			<label class="formulario__label">Cuota:</label>
			<input type="phone" name="Cuota" class="formulario__input" required="" maxlength="5" minlength="3">

			<input type="submit" name="enviar" class="formulario__submit" value="Crear Proveedor">
		</form>
	</div>

</body>
</html>