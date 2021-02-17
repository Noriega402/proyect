<!DOCTYPE html>
<html>
<head>
	<title>Eliminado</title>
	<link rel="stylesheet" type="text/css" href="estiloBorrarProd.css">
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Producto"]);

		$Id = ($_POST["Id_Producto"]);

		$query = "DELETE FROM existencia WHERE Id_Producto = '$Id'"; 
		mysqli_query($conexion,$query);
	?>
	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Producto"]);

		$Id = ($_POST["Id_Producto"]);

		$query = "DELETE FROM producto WHERE Id_Producto = '$Id'"; 
		mysqli_query($conexion,$query);
	?>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");

		$query = mysqli_query($conexion,"SELECT * FROM producto");

		$recuperacion = 
		"<table align='center'  
		style='background: transparent;
		margin-top: 50px;
		border-separate: separate;		
		width: 80%;'>
		<caption align='center' 
		style='font-size: 30px;
		color: white;background: navy;
		font-family:sans-serif;'>Lista de Productos a la Venta</caption>
		<tfoot 
			style='font-size: 30px;
			color: white;background: navy;
			font-family:sans-serif'>
				<tr>
					<td colspan='4' align='center'>Fin de la lista </td>
				</tr>
			</tfoot>			
		<thead 
			style='font-size: 20px;
			color:white; font-family:sans-serif;font-size: 1.5em'>
				<tr align='center' style='background: navy'>
					<td>Id_Producto</td>
					<td>Descripcion</td>
					<td>Id_Proveedor</td>
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
						background: navy;font-size: 1.5em'>".$data["Id_Producto"]."
					</td>

					<td style='color: black;background: white;
						font-family:sans-serif;font-size: 1.5em'>".$data["Descripcion"]."
					</td>

					<td style='color: black;background: white;
						font-family:sans-serif;font-size: 1.5em'>".$data["Id_Proveedor"]."
					</td>

				</tr>
			</tbody>";
		}

		echo $recuperacion;
		
	?>
		<div>
			<button class="btn"><a href="validar.php">Regresar a menu Admin</a></button><br><br>
			<button class="btn"><a href="eliminarProducto.php">Borrar Producto</a></button>
		</div>
</body>
</html>