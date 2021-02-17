<?php 

	isset ($_POST["usuario"]);
	isset ($_POST["clave"]);
	$nombre = $_POST["usuario"];
	$contra = $_POST["clave"];
		if($nombre == 'CIBEC' && $contra == 'sistemas2019')
		{      
        	echo 
        	"<script>
	        	alert('Bienvenido a la Administracion')
	        	window.location = 'validar.php'
        	</script>";
 		} 
 				else { 
					echo
					"<script>
					    var acceso = confirm('Usuario/Password incorrectos. ¿Quiere volver a intentarlo?')
					    
					    if (acceso==true) 
					    {
					       window.location= 'admin.php'					       
					    }
						    else 
						    {
						     window.location= 'index.php'
						    }
				    </script>";
 				}		
?>
