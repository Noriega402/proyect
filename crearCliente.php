<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validacion De Cliente</title>
	<link rel="stylesheet" type="text/css" href="estiloCrearCliente.css">
</head>
<body>

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
			
			$datos = "SELECT * FROM cliente WHERE Id_Cliente = '$clave'";
			mysqli_query($conexion, $datos);
			if ($clave == mysqli_query($conexion, $datos)) {
				echo 
				"<script>
					alert ('Error vuelve a intentarlo');
				</script>";
			}else{
				echo 
				"<script>
					alert ('Usuario creado con exito!');
				</script>";
				$query =("INSERT INTO cliente VALUES ('$clave','$number','$cell','$direction','$name');");
				mysqli_query($conexion, $query);	
			}

	?>
	<br><br>
		<div>
			<button class="botones"><a href="index.php">Regresar al Menu Principal</a></button><br><br>
			<button class="botones"><a href="registro.php">Ingresar Nuevo Usuario</a></button>
		</div>

</body>
</html>