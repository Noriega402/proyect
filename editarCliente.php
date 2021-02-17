<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar informacion del cliente</title>
	<link rel="stylesheet" type="text/css" href="estiloEditarCliente.css">
</head>
<body>

<h3>Ingrese los datos que desea modificar</h3>

	<div>
		<form action="actualizarClienteJS.php" method="post" class="formulario">

			<label class="formulario__label">Id Cliente para actualizar:</label>			
			<input type="phone" class="formulario__input" name="Id" maxlength="4" minlength="1" required="">

			
			<label class="formulario__label">Nit:</label>
			<input type="phone" class="formulario__input" name="NIT" maxlength="8" minlength="8" required="">

			
			<label class="formulario__label">Telefono:</label>
			<input type="phone" class="formulario__input" name="Telefono" maxlength="8" minlength="8" required="">

			
			<label class="formulario__label">Direccion:</label>
			<input type="text" class="formulario__input" name="Direccion" required="">

			
			<label class="formulario__label">Nombre:</label>
			<input type="text" class="formulario__input" name="Nombre" required="">

			<input type="submit" name="enviar" value="Actualizar" class="formulario__submit">

		</form>
	</div>

	<div align='center'>
		<button class='btn'><a href='validar.php' class='btn'>Regresar</a></button>
	</div>

</body>
</html>