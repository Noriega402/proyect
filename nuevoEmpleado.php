<!DOCTYPE html>
<html>
<head>
	<title>Ingresar nuevo Empleado a la Tienda</title>
	<link rel="stylesheet" type="text/css" href="estiloNuevoEmpleado.css">
</head>
<body>

	<div>
		<form action="validaEmpleado.php" class="formulario" method="post">
			<h2 class="titulo">Agregar Empleado a la empresa</h2>
			<img src="logodarksiders.png" class="logo">
			
			<fieldset class="caja">

				<label class="formulario__label">Id_Empleado</label>
				<input type="phone" name="Id_Empleado" class="formulario__input" required="" maxlength="4" minlength="1">

				<label class="formulario__label">Nombre</label>
				<input type="text" name="Nombre" class="formulario__input" required="">

				<label class="formulario__label">Apellido</label>
				<input type="text" name="Apellido" class="formulario__input" required="">

				<label class="formulario__label">Direccion</label>
				<input type="text" name="Direccion" class="formulario__input" required="">

				<label class="formulario__label">Id_Rol</label>
				<input type="phone" name="Id_Rol" class="formulario__input" required="" maxlength="4" minlength="1">

				<label class="formulario__label">Puesto</label>
				<input type="text" name="Puesto" class="formulario__input" required="">

				<input type="submit" name="enviar" class="formulario__submit" value="Registrar">

			</fieldset>
		</form> 
	</div>
	<div>
		<button class="btn"><a href="validar.php" class="btn">Regresar a menu Admin</a></button>
	</div>

</body>
</html>