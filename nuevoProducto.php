<!DOCTYPE html>
<html>
<head>
	<title>Registrar Productos a la Tienda</title>
	<link rel="stylesheet" type="text/css" href="estiloNuevoProducto.css">
</head>
<body>

	
<div align="center" class="caja">
	<h2>Ingresa la nueva mercaderia para la tienda</h2>
	<form action="ingresaProducto.php" method="post">
		<img src="mkX.png" class="logo">

		<label class="formulario__label">Id_Producto:</label>
		<input type="number" name="Id_Producto" required="" class="formulario__input" maxlength="4" minlength="1">
		
		<label class="formulario__label">Id_Proveedor:</label>
		<input type="number" name="Id_Proveedor" required="" class="formulario__input" maxlength="4" minlength="1">

		<label class="formulario__label">Id_Inventario:</label>
		<input type="number" name="Id_Inventario" required="" class="formulario__input" maxlength="4" minlength="1">

		<label class="formulario__label">Descripcion:</label>
		<input type="text" name="Descripcion" required="" class="formulario__input" required="">

		<label class="formulario__label">Cantidad:</label>
		<input type="number" name="Cantidad" required="" class="formulario__input" required="">

		<label class="formulario__label">Precio:</label>
		<input type="float" name="Precio" required="" class="formulario__input" required="" minlength="1" maxlength="7">

		<input type="submit" name="enviar" value="Crear existencia" class="formulario__submit">

	</form>
</div>
</body>
</html>