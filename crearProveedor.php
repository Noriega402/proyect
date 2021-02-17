<!DOCTYPE html>
<html>
<head>
	<title>Proveedor Creado</title>
	<link rel="stylesheet" type="text/css" href="estiloCrearProveedor.css">
</head>
<body>

		<h2>Se ha agregado un nuevo proveedor a la tienda felicidades!</h2>
	
	<?php  

		$conexion = mysqli_connect("localhost", "root", "");
		mysqli_select_db($conexion, "videojuegos");

		isset($_POST["Id_Proveedor"]);
		isset($_POST["Nombre_Proveedor"]);
		isset($_POST["Nit_Proveedor"]);
		isset($_POST["Direccion"]);

		$Id = ($_POST["Id_Proveedor"]);
		$nombreP = ($_POST["Nombre_Proveedor"]);
		$NitP = ($_POST["Nit_Proveedor"]);
		$direction = ($_POST["Direccion"]);

		$query = ("INSERT INTO proveedor VALUES ('$Id','$nombreP','$NitP','$direction');");
		mysqli_query($conexion, $query);
	?>
	
	<div align="center">
		<button class="btn"><a href="validar.php" class="btn">Regresar</a></button>
		<button class="btn"><a href="nuevoProveedor.php" class="btn">Ingresar Nuevo Proveedor</a></button>
	</div>

</body>
</html>