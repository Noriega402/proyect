<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nuevo Proveedor a nuesta Tienda</title>
	<link rel="stylesheet" type="text/css" href="estiloNuevoP.css">
</head>
<body>

	<div>
		<form action="crearProveedor.php" class="formulario" method="post">
			<img src="zonagamer.png" class="logo__gamer">
			<h1 class="formulario__titulo">Nuevo Proveedor</h1>
			
			<label class="formulario__label">Id_Proveedor:</label>
			<input type="phone" name="Id_Proveedor" class="formulario__input" required="" maxlength="4" minlength="1">
			
			<label class="formulario__label">Nombre_Proveedor:</label>
			<input type="text" name="Nombre_Proveedor" class="formulario__input" required="">
			
			<label class="formulario__label">Nit_Proveedor:</label>
			<input type="phone" name="Nit_Proveedor" class="formulario__input" required="" maxlength="8" minlength="8">
			
			<label class="formulario__label">Direccion:</label>
			<input type="text" name="Direccion" class="formulario__input" required="">

			<input type="submit" name="enviar" class="formulario__submit" value="Crear Proveedor">
		</form>
	</div>

</body>
</html>