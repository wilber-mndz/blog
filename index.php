<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!--fuente utilizada roboto-->	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Método de Asignacion</title>
</head>
<body>
	<header>
		<h1>header</h1>
	</header>
	<div class="contenedor-formulario">
	<div class="wrap">
		<!--Formulario Ingresa el numero de filas y de columnas-->
		<form action="llenar_matriz.php" class="formulario" name="formulario_registro" method="POST">
			<div>
				<h1>Metodo de asignacion abandonado</h1>
				<h2>Ingrese numero de filas y columnas</h2>
			</div>
			<div>
				<div class="input-group">
					<input type="text" id="filas" name="filas">
					<label class="label " for="filas">Filas</label>
				</div>
				<div class="input-group">
					<input type="text" id="columnas" name="columnas">
					<label class="label" for="columnas">Columnas:</label>
				</div>
				
				<input type="submit" id="btn-submit" name="submit" value="Enviar">
			</div>
		</form>	
	</div>
		
	</div>
<script src="js/formulario.js"></script>

</body>
</html>