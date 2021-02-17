<!DOCTYPE html>
<html>
<head>
	<title>Actualizado</title>
</head>
<body>

	<h2>Daniel Noriega</h2>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id"]);
		isset($_POST["NIT"]);
		isset($_POST["Telefono"]);
		isset($_POST["Direccion"]);
		isset($_POST["Nombre"]);
		isset($_POST["validar"]);

		$clave = ($_POST["Id"]);
		$nit = ($_POST["NIT"]);
		$cell = ($_POST["Telefono"]);
		$direction = ($_POST["Direccion"]);
		$name = ($_POST["Nombre"]);

			$query = "UPDATE cliente SET Nit = '$nit',
			Telefono = '$cell',
			Direccion = '$direction',
			Nombre = '$name' WHERE Id_Cliente = '$clave'";

			if ("Id_Cliente"!='$clave') 
			{
				echo "No existe ese Id, vuelve a intentarlo";
			}
				else{
					mysqli_query($conexion,$query);		
					echo "Los datos del cliente fueron actualizados correctamente";
				}
	?>



</body>
</html>