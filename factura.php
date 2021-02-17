<!DOCTYPE html>
<html>
<head>
	<title>Compras de la tienda EL DUENDE</title>
	<link rel="stylesheet" type="text/css" href="estiloFactura.css">
</head>
<body>

<div>
	<table style="width: 700px; color: red" >
		<caption style=" color: black">"Videojuegos EL DUENDE NIT: 1015208-6 23 CALLE 10-00 ZONA 4, CONDADO EL NARANJO, CENTRO COMERCIAL,'NARANJO MALL', LOCAL FC-307, MIXCO, GUATEMALA Caja 02"
		</caption>

			<thead>
				<form action="comprar.php" method="post">
					<tr>
						<td>Id_Factura:<input type="phone" name="Id_Factura" maxlength="4" minlength="1" required=""></td>
					</tr>
					<tr>
						<td>Id_Detalle:<input type="phone" name="Id_Detalle" maxlength="4" minlength="1" required=""></td>
					</tr>
					<tr>
						<td>Id_Cliente:<input type="phone" name="Id_Cliente" maxlength="4" minlength="1" required=""></td>

					</tr>
					<tr>
						<td>Nit Cliente:<input type="phone" name="Nit" required="" maxlength="8" minlength="8"></td>						
					</tr>
				
			</thead>

			<tbody style="color: white; background: navy">
				<tr>
					<td>Cantidad</td>
					<td>Id Producto</td>
				</tr>

				<tr>
					<td style=" width: 5px; background: navy">
						<input type="phone" name="Cantidad" maxlength="4" minlength="1" required="">
					</td>
					<td style=" width: 5px; background: navy">
						<input type="phone" name="Id_Producto" maxlength="4" minlength="1">
					</td>
					<td style=" width: 30px" align="center"><input  type="submit" name="enviar" value="Confirmar"></td>
				</form>
				</tr>				
			</tbody>
	</table>
</div>

</body>
</html>