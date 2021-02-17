<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Cliente de la Empresa</title>
	<link rel="stylesheet" type="text/css" href="estiloEliminarC.css">
</head>
<body>

	<h2 align="center">Ingresa el Id del Cliente para poder eliminar su registro de nuestra tienda.</h2>
		<div class="caja1" align="center">
			<form action="borraC.php" method="post">
				<fieldset align="center" class="caja">
					<label class="formulario__label">Id_Cliente</label>

					<input type="phone" name="Id_Cliente" class="formulario__input" maxlength="4" minlength="1">
					
					<input type="submit" name="enviar" class="formulario__submit" value="Eliminar">
				</fieldset>
			</form>
		</div>
		<br>

	<?php 

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");
		$query = mysqli_query($conexion, "SELECT  * FROM cliente");

		$recuperacion = 
		"<table align='center'  
		style='background: black;  
		border-separate: separate; 
		width: 85%;'>

		<caption align='center' 
		style='font-size: 25px;
		background: #2350e1;
		font-family: monospace;
		color: lime'>Clientes Registrados</caption>

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
			color:white; font-family: monospace'>
				<tr style='background: #2350e1'>
					<th> Id_Cliente </th>
					<th> Nit </th>
					<th> Telefono </th>
					<th> Direccion </th>			
					<th> Nombre </th>
				</tr>				
			</thead>";

	while ($data = mysqli_fetch_assoc($query))  
	{
		$recuperacion.=
		"<tbody align='center' style='margin-top: 20px;'>
			<tr 
			style='font-family: monospace;
			font-size: 20px'>
				<td align='center' 
				style='background: #2350e1;
				color: white;
				font-family:monospace;
				font-size:20px'>".$data["Id_Cliente"]."
				</td>
				<td style='color: black;background: white'>".$data["Nit"]."</td>
				<td style='color: black;background: white'>".$data["Telefono"]."</td>
				<td style='color: black;background: white'>".$data["Direccion"]."</td>
				<td style='color: black;background: white'>".$data["Nombre"]."</td>
			</tr>
		</tbody>";
	}

		echo $recuperacion;
	 ?>

	 	<div align='center'>
				<button class='btn'><a href='validar.php' class='btn'>Regresar</a></button>
		</div>
</body>
</html>