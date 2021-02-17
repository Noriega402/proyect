<!DOCTYPE html>
<html>
<head>
	<title>Validacion de Empleado</title>
	<link rel="stylesheet" type="text/css" href="estiloValidaEmpleado.css">
</head>
<body>

	<?php 

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");

		isset($_POST["Id_Rol"]);
		isset($_POST["Puesto"]);

		$claveR = ($_POST["Id_Rol"]);
		$rol = ($_POST["Puesto"]);

		$query = ("INSERT INTO rol VALUES ('$claveR','$rol');");
		mysqli_query($conexion, $query);
	?>

			<?php 

				$conexion = mysqli_connect("localhost","root","");
				mysqli_select_db($conexion, "videojuegos");

				isset($_POST["Id_Empleado"]);
				isset($_POST["Id_Rol"]);
				isset($_POST["Direccion"]);
				isset($_POST["Nombre"]);
				isset($_POST["Apellido"]);

				$claveE = ($_POST["Id_Empleado"]);
				$claveR = ($_POST["Id_Rol"]);
				$direction = ($_POST["Direccion"]);
				$name = ($_POST["Nombre"]);
				$apellido = ($_POST["Apellido"]);

				$query = ("INSERT INTO empleado VALUES ('$claveE','$claveR','$direction','$name','$apellido');");
				mysqli_query($conexion, $query);

			 ?>
	<br><br>
		<div>
			<button class="btn"><a href="validar.php">Regresar a menu Admin</a></button><br><br>
			<button class="btn"><a href="nuevoEmpleado.php">Ingresar Nuevo Empleado</a></button>
		</div>

</body>
</html>