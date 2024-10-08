<!--Licenciatura en Tecnologías e Información
Proyecto VIII
Desarrollo del sistema web + multimedia
Actividad 5
Presentando avances del sito web + multimedia
Fernando Vélez Gómez   ID 219767558
Octavo Semestre
Asesora: Ana Maria Ayala Varela
28 Septiembre 2024 -->

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Reporte de Alumnos</title>
	
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="app.css">

</head>

<body class="fondo">

	<div class="contenedor">
		<!-- contenedor de la cabecera donde se aloja el titulo y el logo -->
		<div class="grid-container1">

			<div>
				<div class="img-container">
				<img src="imagenes/logo.png" alt="logo"> 
				</div>
			</div>
			<div>
				<ul class="nav">
					<li><a href="">Alumnos</a>
							<ul>
								<li><a href="registroalumno.html">Registrar nuevo</a></li>
								<li><a href="reportealumno.html">Reporte</a></li>
							</ul>
					</li>
					
					<li><a href="">Comedor</a>
						<ul>
							<li><a href="crearmenu.html">Crear</a></li>
							<li><a href="vermenu.html">Ver Menu</a></li>
						</ul>
					</li>

					<li><a href="">Inventarios</a>
						<ul>
							<li><a href="utiles.html">Utiles</a></li>
							<li><a href="papeleria.html">Papelería</a></li>
							<li><a href="aseo.html">Aseo</a></li>
							<li><a href="accesorios.html">Accesorios</a></li>
						</ul>
					</li>

					<li><a href="">Personal</a>
						<ul>
							<li><a href="registroper.html">Registrar</a></li>
							<li><a href="reporteper.html">Reporte</a></li>
						</ul>
					</li>
					
					<li><a href="index.html">Cerrar sesion</a></li>
				</ul>
				
				<p style="text-align:center;font-family:verdana;font-size:40px; color:#fbff00;"><br><br>Sistema Administrador de Guarderia</p>
			</div>
		</div>
		
		<!-- Contenedor central -->
		<div class="contenedor">

			<?php
			include 'C:\xampp\htdocs\websag\config.php';
			function conectar(){
				global $HOSTNAME,$USERNAME,$PASSWORD,$DATABASE,$PUERTO;
				$idcnx = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE, $PUERTO) or DIE(mysql_error());
				mysqli_select_db($idcnx,"pingosdb");
				return $idcnx;
			}
			//nos conectamos a mysql
			$cnx = conectar ();
			//consulta.
			
			$res= mysqli_query($cnx,"SELECT nombrealum,apellidoalum,domalum,telefonoalum,padrealum FROM alumno") or die (mysqli_error());
			if( mysqli_num_rows($res) >0){
			//impresión de los datos.
				while ($fila = mysqli_fetch_row($res)) {
					echo "Nombre: ". $fila[0] . ", Apellido: " . $fila[1] . ", Domicilio: ". $fila[2] . ", Telefono: " . $fila[3] . ", Padre: " . $fila[4] . "<br>"; 		    
				}
			}else{
				echo "no se obtuvieron resultados";
			}
			mysqli_close($cnx);
			?>	
			
		
		</div>

		<div class="contenedor">
			<p style="text-align:right;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:#ffffff;">Sitio web creado:   ® Fernando Velez</p>
			<p style="text-align:right;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;color:#ffffff;">                    Proyecto VIII</p>
		</div>
	</div>
</body>
</html>

