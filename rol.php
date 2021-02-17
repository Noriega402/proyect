<!DOCTYPE html>
<html>
<head>
	<title>Roles de los Empleados</title>
	<link rel="stylesheet" type="text/css" href="estiloRol.css">
</head>
<body>

	 <?php

	 	$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");
		$query = mysqli_query($conexion, "SELECT * FROM rol");

		$recuperacion = 
		"<table   
		style='background: black;  
		border-separate: separate;		
		width: 50%;
		margin-top: 10px'
		 align='center'>

		<caption align='center' 
		style='font-size: 20px;
		background: #2350e1;
		font-family: monospace;
		color: lime'>Puesto de Empleados</caption>

		<tfoot 
			style='font-size: 20px;
			font-family: monospace'>
				<tr>
					<td colspan='2' align='center' 
					style='background: #2350e1;
					color:lime'> Fin de la lista </td>
				</tr>
			</tfoot>

		<thead 
			style='font-size: 15px;
			color:white; font-family: monospace'>
				<tr align='center' style='background: #2350e1'>			
					<td>Id_Rol</td>
					<td>Puesto</td>
				</tr>						
		</thead>";

		while ($data = mysqli_fetch_assoc($query))  
		{

			$recuperacion.=
			"<tbody>
				<tr align='center'
				style='font-family: sans-serif;
				font-size: 15px; background:white'>

					<td style='color:black;font-family:monospace;'>".$data["Id_Rol"]."
					</td>

					<td style='color:black;font-family:monospace;'>".$data["Puesto"]."
					</td>
					
				</tr>
			</tbody>";	 		
	 	}
	 	echo $recuperacion;
	 ?>

	 <button class="btn"><a href="viewPersonal.php" class="btn">Regresar</a></button>

</body>
</html>