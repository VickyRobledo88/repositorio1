<?php

class PersonaDAO{
	private $mbd;
	
	public function __construct($mbd){
		$this->mbd=$mbd;
	}
	public function guardar(Persona $persona){
		try{
			$sentencia=$this->mbd->prepare("INSERT INTO Persona (nombre,apellido,dni,sexo,estado_civil,pasatiempo) VALUES (:nombre,:apellido,:dni,:sexo,:estadoCivil,:pasatiempos)");
			$sentencia->bindParam(':nombre',$persona->getNombre());
			$sentencia->bindParam(':apellido',$persona->getApellido());
			$sentencia->bindParam(':dni',$persona->getDni());
			$sentencia->bindParam(':sexo',$persona->getSexo());
			$sentencia->bindParam(':estadoCivil',$persona->getEstadoCivil());
			$sentencia->bindParam(':pasatiempos',$persona->getPasatiempos());
			/*
			 * Faltan estos datos:
			private $fechaNacimiento;
			private $estadoCivil;
			private $pasatiempos;
			*/	
			
			$sentencia->execute();
		
		}catch(Exception $e){
			print "Error!: ".$e->getMessage()."<br/>";
		}
	}
	
	public function listar(){
		$sentencia=$this->mbd->prepare("select * from Persona");
		$sentencia->execute(array());
		$arreglo=array();
		foreach ($sentencia as $fila){
			$per= new Persona($fila['tipo'],$fila['Nombre'],$fila['Apellido'],
					$fila['dni'],$fila['sexo'],$fila['fech_nac'],
					$fila['estado_civil'],$fila['pasatiempo']);
			$arreglo[]=$per;
		}
		return $arreglo;
	}
	
	
	public function listarPersonas(){
		$personas=array();
		try {
			foreach($this->mbd->query("SELECT * FROM persona") as $fila) {

				$persona= new Persona($fila['nombre'],$fila['apellido'],$fila['dni'],
						$fila['sexo'],$fila['fecha_nacimiento'],$fila['estado_civil'],
						$fila['pasatiempo']);
				$personas[]=$persona;	/*agrego persona a arreglo personas*/
			}
			return $personas;
		} catch (PDOException $e) {
			print "¡Error!: " . $e->getMessage() . "<br/>";
		
		}
	}
	
	public function actualizar($id_persona,Persona $persona){
		try{
			$sentencia=$this->mbd->prepare("UPDATE persona SET nombre=?,apellido=?,dni=?,sexo=?,estado_civil=? WHERE id=?");
			$sentencia->bindParam(1,$persona->getNombre());
			$sentencia->bindParam(2,$persona->getApellido());
			$sentencia->bindParam(3,$persona->getDni());
			$sentencia->bindParam(4,$persona->getSexo());
			$sentencia->bindParam(5,$persona->getEstadoCivil());
			$sentencia->bindParam(6, $id_persona);
			/*
			 * Faltan estos datos:
				private $fechaNacimiento;
				private $estadoCivil;
				private $pasatiempos;
				*/
				
			$sentencia->execute();
			echo "Persona Actualizada<br>";
	
		}catch(Exception $e){
			print "Error!: ".$e->getMessage()."<br/>";
		}
	}
	
	public function eliminar($id_persona){
		$sentencia = $this->mbd->prepare("DELETE FROM persona WHERE id=?");
		$sentencia->bindParam(1, $id_persona);
		// Actualización
		//$id_persona = 12;
		$sentencia->execute();
	}
	
}