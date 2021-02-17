<!DOCTYPE html>
<html>
<head>
	<title>Editar Datos de los Proveedores</title>
	<link rel="stylesheet" type="text/css" href="estiloEditarProveedor.css">
</head>
<body>

	<div>
		<form action="actualizarProveedorJS.php" method="post" class="formulario">
			<label class="formulario__label">Id del Proveedor para actualizar</label>
			<input type="phone" name="Id_Proveedor" class="formulario__input" required="" maxlength="4" minlength="1">

			<label class="formulario__label">Nombre de Proveedor:</label>
			<input type="text" name="Nombre_Proveedor" class="formulario__input" required="">

			<label class="formulario__label">Nit de Proveedor:</label>
			<input type="phone" name="Nit" class="formulario__input" required="" maxlength="8" minlength="8">

			<label class="formulario__label">Direccion:</label>
			<input type="text" name="Direccion" class="formulario__input" required="">

			<input type="submit" name="enviar" value="Actualizar" class="formulario__submit">

		</form>
	</div>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");

		$query = mysqli_query($conexion,"SELECT * FROM proveedor");

		$recuperacion = 
		"<table align='center'  
		style='background: white;
		margin-top: 50px;
		border-separate: separate;		
		width: 80%;'>

		<caption align='center' 
		style='font-size: 25px;
		background: red;
		font-family:sans-serif;
		color: white'>Lista de los proveedores</caption>

		<tfoot 
			style='font-size: 25px;
			font-family:sans-serif'>
				<tr>
					<td colspan='4' align='center' 
					style='background: red;
					color:white'> Fin de la lista </td>
				</tr>
			</tfoot>

		<thead 
			style='font-size: 20px;
			color:white; font-family:sans-serif'>
				<tr align='center' style='background: red'>
					<td>Id_Proveedor</td>
					<td>Nombre de Proveedor</td>
					<td>Nit de Proveedor</td>
					<td>Direccion</td>
				</tr>						
		</thead>";

		while ($data = mysqli_fetch_assoc($query))  
		{

			$recuperacion.=
			"<tbody>
				<tr align='center'
				style='font-family: sans-serif;
				font-size: 15px; background:white'>

					<td style='color: white;background: red;font-size: 20px'>".$data["Id_Proveedor"]."
					</td>

					<td style='color: white;background: black;font-family:sans-serif;'>".$data["Nombre_Proveedor"]."
					</td>

					<td style='color: white;background: black;font-family:sans-serif;'>".$data["Nit_Proveedor"]."
					</td>

					<td style='color: white;background: black;font-family:sans-serif;'>".$data["Direccion"]."
					</td>
				</tr>
			</tbody>";
		}

		echo $recuperacion;
	 ?>

</body>
</html>