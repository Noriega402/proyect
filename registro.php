<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bienvenido a EL DUENDE</title>
	<link rel="stylesheet" type="text/css" href="estiloRegistro.css">
</head>
<body >

<div class="cuadro">
	<form action="crearCliente.php" class="formulario" method="post">
		<img src="epicgames.png" class="logo__epic">
		<h1 class="formulario__titulo">Registrate</h1>

		<input type="phone" name="Id" class="formulario__input"  maxlength="1" minlength="8" required="">
		<label for="" class="formulario__label">ID</label>

		<input type="text" name="Nombre" class="formulario__input" required="">
		<label for="" class="formulario__label">Nombre</label>

		<input type="phone" name="NIT" class="formulario__input"  maxlength="8" minlength="8" required="">
		<label for="" class="formulario__label">NIT</label>

		<input type="phone" name="Telefono" class="formulario__input" maxlength="8" minlength="8">
		<label for="" class="formulario__label">Telefono</label>

		<input type="text" name="Direccion" class="formulario__input">
		<label for="" class="formulario__label">Direccion</label>

		<input type="submit" class="formulario__submit" value="Crear">
	</form>
	
</div>	
		<script src="formulario.js">
		</script>
</body>
</html>