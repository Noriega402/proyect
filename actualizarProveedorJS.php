<!DOCTYPE html>
<html>
<head>
	<title>Actulizar Proveedor</title>
	<link rel="stylesheet" type="text/css" href="estiloEditarProveedor.css">
</head>
<body>

	<?php  
		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Proveedor"]);
		isset($_POST["Nombre_Proveedor"]);
		isset($_POST["Nit"]);
		isset($_POST["Direccion"]);

		$Id = ($_POST["Id_Proveedor"]);
		$nombreP = ($_POST["Nombre_Proveedor"]) ;
		$nit = ($_POST["Nit"]);
		$direction = ($_POST["Direccion"]);

		$query = "UPDATE proveedor SET Nombre_Proveedor = '$nombreP', Nit_Proveedor = '$nit',
		Direccion = '$direction' WHERE Id_Proveedor = '$Id';";
		mysqli_query($conexion,$query);

	?>

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

	<div align='center'>
		<button class='btn'><a href='validar.php' class='btn'>Regresar</a></button>
		<button class='btn'><a href='editarProveedor.php' class='btn'>Actualizar Proveedor</a></button>
	</div>

</body>
</html>