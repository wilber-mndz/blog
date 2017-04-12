<?php 

// Verificando si el usuario ingreso los datos en el formulario anterior
if(!isset($_POST['submit']))
{
	
	header('Location: http://localhost/asignacion/index.php');
}
session_start();
$filas = $_SESSION['filas'];
$columnas = $_SESSION['columnas'];

print_r($_POST);

// Almacenamos los datos del usuario en una matriz
for($i=1; $i < $filas ; $i++)
{
	$variable = ($i) . 'x' . (1); 
	$matriz[$i][1] = $_POST["$variable"];
}

echo $matriz[1][1];

?>