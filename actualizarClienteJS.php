<!DOCTYPE html>
<html>
<head>
	<title>Actualizado</title>
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id"]);
		isset($_POST["NIT"]);
		isset($_POST["Telefono"]);
		isset($_POST["Direccion"]);
		isset($_POST["Nombre"]);

		$clave = ($_POST["Id"]);
		$nit = ($_POST["NIT"]);
		$cell = ($_POST["Telefono"]);
		$direction = ($_POST["Direccion"]);
		$name = ($_POST["Nombre"]);

			$query = "UPDATE cliente SET Nit = '$nit',
			Telefono = '$cell',
			Direccion = '$direction',
			Nombre = '$name' WHERE Id_Cliente = '$clave';";

			if ('$clave' == "Id_Cliente") 
			{
				echo					
					"<script>
						alert('El Id que ingresaste no se ha encontrado.')
						window.location='editarCliente.php'
					</script>";	
					
			}
				else
				{									
					echo
					"<script>						
						alert('Los datos del cliente fueron actualizados correctamente')
						window.location='editarCliente.php'
					</script>";
					mysqli_query($conexion,$query);
								
				}
		?>

</body>
</html>