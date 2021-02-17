<!DOCTYPE html>
<html>
<head>
	<title>Compras de la tienda EL DUENDE</title>
	<link rel="stylesheet" type="text/css" href="estiloFactura.css">
</head>
<body>

	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Factura"]);
		isset($_POST["Id_Cliente"]);
		isset($_POST["Nit"]);

		$IdF = ($_POST["Id_Factura"]);
		$IdC = ($_POST["Id_Cliente"]);
		$nit = ($_POST["Nit"]);

		$query = ("INSERT INTO factura VALUES ('$IdF','$IdC','$nit');");
		mysqli_query($conexion,$query);

	?>
	
	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Factura"]);
		isset($_POST["Id_Cliente"]);

		$IdF = ($_POST["Id_Factura"]);
		$IdC = ($_POST["Id_Cliente"]);

		$query = mysqli_query($conexion, "SELECT * FROM cliente WHERE Id_Cliente = '$IdC'"); 

		$factura = 
		"<tbody style='color: white; background: navy' align='center'>
			<tr>
				<td>Cantidad</td>
				<td>Id Producto</td>
				<td>Precio c/u</td>
				<td>Descripcion</td>
				<td>Subtotal</td>
				<td>Total</td>	
			</tr>";

		$recuperacion = 
		"<div>
			<table style='background: white; color: white; width: 700px'>
				<caption align:'center' style ='background: navy; color: white;width: 1078px'>Videojuegos EL DUENDE NIT: 1015208-6 23 CALLE 10-00 ZONA 4, CONDADO EL NARANJO, CENTRO COMERCIAL,NARANJO MALL, LOCAL FC-307, MIXCO, GUATEMALA Caja 02
				</caption>".$factura."	
		</div>";

		while ($data = mysqli_fetch_assoc($query))  
		{
			$recuperacion.=
			"<thead align='center'>
					<tr style ='background: navy'>
						<td>Id_Factura: ".$IdF."</td>
						<td>Id_Cliente: ".$data["Id_Cliente"]."</td>
						<td>Nit ".$data["Nit"]."</td>
						<td colspan='3'>Nombre: ".$data["Nombre"]."</td>
					</tr>
				</thead>";
		}
		
	?>
	<?php  

		$conexion = mysqli_connect("localhost","root","");
		mysqli_select_db($conexion,"videojuegos");

		isset($_POST["Id_Detalle"]);
		isset($_POST["Id_Factura"]);
		isset($_POST["Id_Producto"]);

		$IdDetalle = ($_POST["Id_Factura"]);
		$IdC = ($_POST["Id_Cliente"]);
		$IdProd = ($_POST["Id_Producto"]);

		$query = ("INSERT INTO factura VALUES ('$IdDetalle','$IdC','$IdProd');");
		mysqli_query($conexion,$query);

	?>
	<?php 

	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"videojuegos");
	
	isset($_POST["Cantidad"]);
	isset($_POST["Id_Producto"]);

	$cantidad = ($_POST["Cantidad"]);
	$IdProd = ($_POST["Id_Producto"]);

	$query = mysqli_query($conexion, "SELECT * FROM existencia  WHERE Id_Producto = '$IdProd'"); 

		while ($data = mysqli_fetch_assoc($query))  
		{
			$recuperacion.=
			"<tr>
			<td style=' width: 5px; background: navy'><fieldset>".$cantidad."</fieldset></td>

			<td style=' width: 5px; background: navy'><fieldset>".$data["Id_Producto"]."</fieldset></td>

			<td style='background: navy;width: 75px'>
						<fieldset>".$data["Precio"]."</fieldset>				
			</td>";
		}
	?>
	<?php 

	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"videojuegos");
	
	isset($_POST["Id_Producto"]);

	$IdProd = ($_POST["Id_Producto"]);

	$query = mysqli_query($conexion, "SELECT * FROM producto  WHERE Id_Producto = '$IdProd'"); 

		while ($data = mysqli_fetch_assoc($query))  
		{
			$recuperacion.=
			"<td style='background: navy;width: 450px;'>
				<fieldset align='center'>".$data["Descripcion"]."</fieldset>
			</td>";
		}
		
	?>

	<?php 

	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"videojuegos");
	
	isset($_POST["Id_Producto"]);

	$IdProd = ($_POST["Id_Producto"]);

	$query = mysqli_query($conexion, "SELECT * FROM existencia WHERE Id_Producto = '$IdProd' AND Precio");

	/*$resultado = $IdProd * $query;*/

		while ($data = mysqli_fetch_assoc($query))  
		{
			$recuperacion.=
			"<td style='background: navy;width: 100px;'>
				<fieldset align='center'>".$data["Precio"]."</fieldset>
			</td>
			<td style='background: navy;width: 100px;'>
				<fieldset align='center'>".$data["Precio"]."</fieldset>
			</td>";
		}

		echo $recuperacion;
		
	?>


</body>
</html>