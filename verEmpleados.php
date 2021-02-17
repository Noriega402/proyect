<!DOCTYPE html>
<html>
<head>
	<title>Empleados de la Empresa</title>
	<link rel="stylesheet" type="text/css" href="estiloVerEmpleados.css">
</head>
<body>

	<?php 

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");
		$query = mysqli_query($conexion, "SELECT * FROM empleado");

		$recuperacion = 
		"<table align='center'  
		style='background: black;  
		border-separate: separate;		
		width: 70%;
		margin-top: 200px'>

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

		<div>
			<button class="btn"><a href="viewPersonal.php">Regresar</a></button>
		</div>

</body>
</html>