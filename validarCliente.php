<!DOCTYPE html>
<html>
<head>
	<title>Validar Cliente</title>
</head>
<body>

	<h2>Felicidades!</h2>
	<h3>Tu Usuario ha sido creado con exito!</h3>

	<?php 

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion, "videojuegos");

				isset($_POST["Id"]);
				isset($_POST["NIT"]);
				isset($_POST["Nombre"]);
				isset($_POST["Direccion"]);
				isset($_POST["Telefono"]);

				$clave = ($_POST["Id"]);
				$number = ($_POST["NIT"]);
				$name = ($_POST["Nombre"]);
				$direction = ($_POST["Direccion"]);
				$cell = ($_POST["Telefono"]);

				echo $clave." ".$number." ".$name." ".$direction." ".$cell;

			$query = ("INSERT INTO cliente VALUES ('$clave','$number','$cell','$direction','$name');");
				mysqli_query($conexion, $query);

			 ?>

<br><br>
		<div>
			<button class="botones"><a href="index.php">Regresar al Menu Principal</a></button><br><br>
			<button class="botones"><a href="registro.php">Ingresar Nuevo Usuario</a></button>
		</div>

</body>
</html>