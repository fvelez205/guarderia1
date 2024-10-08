<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conexion Base de datos</title>
</head>
<body>
	<?php
	$enlace = mysqli_connect("localhost","root","","pingosdb","3310");

	if(!$enlace){
		die("no pude conectarse a la base de datos ". mysqli_error());
	}
	echo "Te has conectado correctamente a la base de datos";
	mysqli_close($enlace);
	?>	
</body>
</html>