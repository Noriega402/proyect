<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Producto</title>
	<link rel="stylesheet" type="text/css" href="estiloEliminarProducto.css">
</head>
<body>

<div align="center" class="caja">
	<form action="borrarProd.php" method="post" class="formulario" align="center">		
		
		<label class="formulario__label">Id del Producto:</label>
		<input type="phone" class="formulario__input" name="Id_Producto" maxlength="4" minlength="1">

		<input type="submit" name="Enviar" class="formulario__submit" value="Eliminar">
	</form>
</div>

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

	<button class="btn"><a href="validar.php" class="btn">Menu de Admin</a></button>

</body>
</html>