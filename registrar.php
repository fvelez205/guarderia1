<?php
//conexion con la base de datos
$cnx=mysqli_connect("localhost","root","","pingosdb","3310");
//tomamos del formulario el nombre y lo pasamos a variable auxiliar
$nombrealum=$_POST["nombre"];
$apellidoalum=$_POST["apellido"];
$domalum=$_POST["domicilio"];
$telefonoalum=$_POST["telefono"];
$padrealum=$_POST["padre"];
//sentencia query 
$inserta="insert into alumno(nombrealum,apellidoalum,domalum,telefonoalum,padrealum)values('$nombrealum','$apellidoalum','$domalum','$telefonoalum','$padrealum')";
//se pasa la consulta a la base de datos
$altas=mysqli_query ($cnx,$inserta);
if(!$altas) //mensaje de confirmacion de registro 
	echo "error";
else
	echo "registrado, regresa a la pagina anterior";
mysqli_close($cnx);
?>