<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Administracion</title>
	<link rel="stylesheet" type="text/css" href="estiloAdmin.css">
</head>
<body>

	<div id = "opciones" align="center">
		<img id = "logo" src="el_duende.jpg">
		<h3>Ingresa los siguientes datos:</h3>

		<form action = "confirmar.php" method = "post">

			<h3>Usuario<br>
			<input type = "text" name = "usuario" class="campos__input" placeholder="Nombre De Usuario" required="">
			</h3>

			<h3>Clave<br>
			<input type="password" name="clave" class="campos__input" placeholder="Clave De Usuario" required="">
			</h3>

			<input class="submit" type="submit" name="enviar" value="Aceptar">

		</form>

			<br><br><br><button class="regresar"><a href="index.php">Menu Principal</a></button>
	</div>
	
			
</body>
</html>