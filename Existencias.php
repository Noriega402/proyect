<!DOCTYPE html>
<html>
<head>
	<title>Existencia de los Productos</title>
	<link rel="stylesheet" type="text/css" href="estiloExistencias.css">
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");

		$query = mysqli_query($conexion,"SELECT * FROM existencia");

		$recuperacion = 
		"<table align='center'  
		style='background: transparent;
		margin-top: 50px;
		border-separate: separate;		
		width: 80%;'>

		<caption align='center' 
		style='font-size: 30px;
		color: white;background: navy;
		font-family:sans-serif;'>Lista de Existencia de los Productos</caption>

		<tfoot 
			style='font-size: 30px;
			color: white;background: navy;
			font-family:sans-serif'>
				<tr>
					<td colspan='4' align='center'>Fin de la lista</td>
				</tr>
			</tfoot>
			 

		<thead 
			style='font-size: 20px;
			color:white; font-family:sans-serif;font-size: 1.5em'>
				<tr align='center' style='background: navy'>
					<td>Id_Inventario</td>
					<td>Id_Producto</td>
					<td>Cantidad</td>
					<td>Precio</td>
				</tr>						
		</thead>";

		while ($data = mysqli_fetch_assoc($query))  
		{

			$recuperacion.=
			"<tbody>
				<tr align='center'
				style='font-family: sans-serif;
				font-size: 15px; background: transparent;'>

					<td style='color: white;
						background: navy;font-size: 1.5em'>".$data["Id_Inventario"]."
					</td>

					<td style='color: black;background: white;
						font-family:sans-serif;font-size: 1.5em'>".$data["Id_Producto"]."
					</td>

					<td style='color: black;background: white;
						font-family:sans-serif;font-size: 1.5em'>".$data["Cantidad"]."
					</td>

					<td style='color: black;background: white;
						font-family:sans-serif;font-size: 1.5em'>".$data["Precio"]."
					</td>

				</tr>
			</tbody>";
		}

		echo $recuperacion;
		
	?>

	<div align='center'>
		<button class='btn'><a href='inventario.php' class='btn'>Regresar</a></button>
	</div>

</body>
</html>