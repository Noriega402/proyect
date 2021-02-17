<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		
		isset($_POST["IdR"]);
		
		isset($_POST["Puesto"]);

		
		$claveR = ($_POST["IdR"]);
		
		$puesto = ($_POST["Puesto"]);

			$query = "UPDATE rol SET Puesto = '$puesto' WHERE Id_Rol = '$claveR';";			
			mysqli_query($conexion,$query);
	?>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["IdE"]);
		isset($_POST["Direccion"]);
		isset($_POST["Nombre"]);
		isset($_POST["Apellido"]);

		$claveE = ($_POST["IdE"]);
		$direction = ($_POST["Direccion"]);
		$nombre = ($_POST["Nombre"]);
		$apellido = ($_POST["Apellido"]);

		$query="UPDATE empleado SET Nombre = '$nombre', Apellido = '$apellido', Direccion = '$direction' WHERE Id_Empleado = '$claveE';";
		mysqli_query($conexion,$query);

		echo 
		"<script>
			alert ('Se han actualizado los datos del empleado!')
			var intentar = confirm ('¿Deseas modificar otros empleados?')
				if(intentar == true)
				{
					window.location = 'editarEmpleado.php'
				}
					else
					{
						window.location = 'validar.php'
					}
		</script>";

	?>

</body>
</html>