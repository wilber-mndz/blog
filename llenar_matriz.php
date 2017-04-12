<?php
session_start();
// Verificamos que el formulario haya recibido la informacion 
// mediante el metodo POST
if (isset($_POST['submit'])) {
	$filas = $_POST['filas'];		//Asignamos el valor de las filas a una variable
	$columnas = $_POST['columnas'];	//Asignamos el valor de las columnas a una variable
	//Mostrando los valores ingresados por el usuario
	// echo "Filas ingresadas $filas <br/>";
	// echo "Columnas ingresadas $columnas <br/>";
	$_SESSION['filas'] = $filas;
	$_SESSION['columnas'] = $columnas;
	}else {
		header('Location: http://localhost/asignacion/index.php');
	}

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<!--fuente utilizada roboto-->	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
 	<title>Llenando datos</title>
 </head>
 <body>

 <div class="contenedor-formulario" >
 	<div class="wrap-matriz"> 		
 	<form action="proceso.php"  class="formulario" method="POST">
 		<div class="matriz">
 			<!-- Creamos la matriz que el usuario llenara con los parametros indicados -->
 			<?php 
 				for ($i=0; $i <$filas ; $i++) { 
 					for ($j=0; $j < $columnas ; $j++) { 
 						// Almacenamos el numero de fila y columna para identificar la variable
 						$variable = ($i+1) . 'x' . ($j+1); 
 						echo "<div class='casillas' ><input type='text' name='$variable'></div>";
 					}
 					echo '<br/>';
 				}
 			 ?>
 		</div>

 		<input type="submit" id="btn-submit" name="submit" value="Enviar">

 	</form>
 	</div>
 </div>
 </body>
 </html>