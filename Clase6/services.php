<?php
include 'Persona.php';
include 'conexion.php';
include 'PersonaDAO.php';

class Services{
	public function guardarDatos($nombre,$apellido,$dni,$sexo,$estado,$pasatiempos){
		include 'conexion.php';
		$persona= new Persona($nombre, $apellido, $dni, $sexo, null, $estado, $pasatiempos);
		$personaDAO=new PersonaDAO($mbd);
		$personaDAO->guardar($persona);
		echo '<br>Se Guardó exitosamete<br>';
	}
	
	public function listarDatos(){
		include 'conexion.php';
		$personaDAO=new PersonaDAO($mbd);
		return $personaDAO->listarPersonas();
	}
}


/*

echo '<br>Se Guardó exitosamete<br>';
*/

//var_dump($personaDAO->crearPersona());
/*
$id = 11;

$personaDAO->actualizar($id,$persona);

echo '<br>Se Actualizo exitosamete<br>';

$personaDAO->eliminar($id);
echo '<br>Se Elimino exitosamete<br>';

*/