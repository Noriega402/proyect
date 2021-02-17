<!DOCTYPE html>
<html>
<head>
	<title>Producto Ingresado</title>
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Producto"]);
		isset($_POST["Id_Provedor"]);
		isset($_POST["Descripcion"]);

		$IdProd = ($_POST["Id_Producto"]);
		$IdProv = ($_POST["Id_Proveedor"]);
		$description = ($_POST["Descripcion"]);

		$query = ("INSERT INTO producto VALUES ('$IdProd','$description','$IdProv');");
		mysqli_query($conexion,$query);
	?>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Inventario"]);
		isset($_POST["Id_Producto"]);
		isset($_POST["Cantidad"]);
		isset($_POST["Precio"]);

		$IdInv = ($_POST["Id_Inventario"]);
		$IdProd = ($_POST["Id_Producto"]);
		$cantidad = ($_POST["Cantidad"]);
		$precio = ($_POST["Precio"]);

		$query = ("INSERT INTO existencia VALUES ('$IdInv','$IdProd','$cantidad','$precio');");
		mysqli_query($conexion,$query);
	?>

	<div align='center'>
		<button class='btn'><a href='Existencias.php' class='btn'>Ver Existencias</a></button>
		<button class='btn'><a href='Productos.php' class='btn'>Ver Productos</a></button>
	</div>

</body>
</html>