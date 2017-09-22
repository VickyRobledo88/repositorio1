<html>
<head>
	<title>Nuevo</title>
</head>

<body>
<?php
//including the database connection file

var_dump($_POST);
include_once("../services.php");


	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$estado = $_POST['estado'];
	$pasatiempos = $_POST['pasatiempos'];
			
	// checking empty fields
	if(empty($nombre) || empty($apellido) || empty($dni)|| empty($estado)) {
				
		if(empty($nombre)) {
			echo "<font color='red'>No existe Nombre.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>No existe apellido.</font><br/>";
		}
		
		if(empty($dni)) {
			echo "<font color='red'>No existe dni.</font><br/>";
		}
		
		if(empty($estado)) {
			echo "<font color='red'>No existe Estado Civil.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		//Llamar Servicio
		$servicio=new Services();
		$servicio->guardarDatos($nombre, $apellido, $dni, 'Femenino', $estado, $pasatiempos);
		//display success message

	}

?>
</body>
</html>
