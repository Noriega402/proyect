<!DOCTYPE html>
<html>
<head>
	<title>Empleado eliminado</title>
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Empleado"]);

		$Id = ($_POST["Id_Empleado"]);

		$query = "DELETE FROM empleado WHERE Id_Empleado = '$Id';"; 
		mysqli_query($conexion,$query);

	?>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");
		
		isset($_POST["Id_Rol"]);
		
		$Id = ($_POST["Id_Rol"]);

		$query = "DELETE FROM rol WHERE Id_Rol = '$Id';";
		mysqli_query($conexion,$query);

	?>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");
		$query = mysqli_query($conexion, "SELECT * FROM empleado");

		$recuperacion = 
		"<table align='center'  
		style='background: black;  
		border-separate: separate;		
		width: 70%'>

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
	 	<div align="center">
			<button class="btn"><a href="validar.php" class="btn">Regresar</a></button><br><br><br><br><br>
			<button class="btn"><a href="eliminarEmpleado.php" class="btn">Eliminar Empleado</a></button><br><br><br><br><br>
		</div>
</body>
</html>