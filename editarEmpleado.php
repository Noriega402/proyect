<!DOCTYPE html>
<html>
<head>
	<title>Editar informacion del Empleado</title>
	<link rel="stylesheet" type="text/css" href="estiloEditarEmpleado.css">
</head>
<body>

	<div>
		<form action="actualizarEmpleadoJS.php" method="post" class="formulario">
			<h3>Ingrese los datos que desea modificar</h3>
			<img src="FuegoBros.png" class="logo">

			<label class="formulario__label">Id de Empleado para actualizar:</label>	
			<input type="phone" class="formulario__input" name="IdE" maxlength="4" minlength="1">

			
			<label class="formulario__label">Id Rol:</label>
			<input type="phone" class="formulario__input" name="IdR" maxlength="4" minlength="1">


			<label class="formulario__label">Direccion:</label>
			<input type="text" class="formulario__input" name="Direccion">

			
			<label class="formulario__label">Nombre:</label>
			<input type="text" class="formulario__input" name="Nombre">

			
			<label class="formulario__label">Apellido:</label>
			<input type="text" class="formulario__input" name="Apellido">

			<label class="formulario__label">Puesto:</label>
			<input type="text" class="formulario__input" name="Puesto">

			<input type="submit" name="enviar" value="Actualizar" class="formulario__submit">

		</form>
	</div>

	<div align='center'>
				<button class='btn'><a href='validar.php' class='btn'>Regresar</a></button>
		</div>


<?php 

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");
		$query = mysqli_query($conexion, "SELECT * FROM empleado");

		$recuperacion = 
		"<table align='center'  
		style='background: white;  
		border-separate: separate;
		border-right: 0px;
		width: 70%;'>

		<caption align='center' 
		style='font-size: 25px;
		background: #2350e1;
		font-family: monospace;
		color: lime;
		border-right: 2px solid white;
		border-left: 2px solid white;
		border-top: 2px solid white'>Empleados Activos</caption>

		<tfoot 
			style='font-size: 25px;
			font-family: monospace'>
				<tr>
					<td colspan='5' align='center' 
					style='background: #2350e1;
					color:lime'> Fin de la lista </td>
				</tr>
			</tfoot>

		<thead 
			style='font-size: 20px;
			color:white; font-family: monospace;'>
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
				font-size: 20px; background: white;'>

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
</body>
</html>