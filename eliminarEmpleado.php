<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Empleado de nuestra tienda</title>
	<link rel="stylesheet" type="text/css" href="estiloEliminarEmpleado.css">
</head>
<body>

	<h2 align="center">Ingresa el Id del Empleado para poder eliminar su registro de nuestra tienda.</h2>
			<div class="caja1">
				<form action="borrarE.php" method="post" class="formulario">
					<fieldset align="center" class="caja">

						<label class="formulario__label">Id_Empleado</label>
						<input type="phone" name="Id_Empleado" class="formulario__input" maxlength="4" minlength="1">

						<label class="formulario__label">Id_Rol</label>
						<input type="phone" name="Id_Rol" class="formulario__input" maxlength="4" minlength="1">

						<input type="submit" name="enviar" class="formulario__submit">
					</fieldset>
				</form>
			</div>

			<?php 

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");
		$query = mysqli_query($conexion, "SELECT * FROM empleado");

		$recuperacion = 
		"<table align='center'  
		style='background: black;  
		border-separate: separate;		
		width: 70%;'>

		<caption align='center' 
		style='font-size: 20px;
		background: #2350e1;
		font-family: monospace;
		color: lime'>Empleados Activos</caption>

		<tfoot 
			style='font-size: 20px;
			font-family: monospace'>
				<tr>
					<td colspan='5' align='center' 
					style='background: #2350e1;
					color:lime'> Fin de la lista </td>
				</tr>
			</tfoot>

		<thead 
			style='font-size: 15px;
			color:white; font-family: monospace'>
				<tr align='center' style='background: #2350e1'>
					<td>Id_Empleado</td>
					<td>Id_Rol</td>
					<td>Direccion</td>
					<td>Nombre</td>
					<td>Apellido</td>
				</tr>						
		</thead>";

		while ($data = mysqli_fetch_assoc($query))  
		{

			$recuperacion.=
			"<tbody>
				<tr align='center'
				style='font-family: sans-serif;
				font-size: 15px; background:white'>

					<td style='color: white;background: #2350e1'>".$data["Id_Empleado"]."
					</td>

					<td style='color:black;font-family:monospace;'>".$data["Id_Rol"]."
					</td>

					<td style='color:black;font-family:monospace;'>".$data["Direccion"]."
					</td>

					<td style='color:black;font-family:monospace;'>".$data["Nombre"]."
					</td>

					<td style='color:black;font-family:monospace;'>".$data["Apellido"]."
					</td>

					

				</tr>
			</tbody>";
		}

		echo $recuperacion;
	 ?>
		
		<button class="btn"><a href="validar.php" class="btn">Regresar</a></button>
</body>
</html>