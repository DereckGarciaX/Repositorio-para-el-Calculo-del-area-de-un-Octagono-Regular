<!DOCTYPE html>

<html lang="es">

<head>

   <title>Formulario de obtencion de datos</title>
   <meta charset="utf-8" />
</head>

<body>
	<?php

	if ($_GET['poligono'] == "rec"){
		$resultado = $_GET['base'] * $_GET['altura'] ;	
		echo "<center><h3> El area del rectangulo es $resultado </h3></center>";
	}elseif ($_GET['poligono'] == "tri"){
		$resultado = (( $_GET['base'] * $_GET['altura'] ) / 2);	
		echo "<center><h3> El area del triangulo es $resultado </h3></center>";
	}else{
		$resultado = ($_GET['base'] * $_GET['lado'] * $_GET['altura'])/2;	
		echo "<center><h3> El area del poligono es $resultado cm2</h3></center>";
	}
	?>
</body>
</html>
