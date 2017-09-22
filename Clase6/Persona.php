<?php

class Persona {
	private $id;
	protected  $nombre;
	private $apellido;
	private $dni;
	private $sexo;
	private $fechaNacimiento;
	private $estadoCivil;
	private $pasatiempos;


public function __construct($nom,$ape,$dni,$sexo,$fechaNac,$estado,$pasa){
	$this->nombre=$nom;
	$this->apellido=$ape;
	$this->dni=$dni;
	$this->sexo=$sexo;
	$this->fechaNacimiento=$fechaNac;
	$this->estadoCivil=$estado;
	$this->pasatiempos=$pasa;
}

public function imprimir(){
	echo $this->nombre." ".$this->apellido." ".$this->dni." ".$this->sexo
	." ".$this->fechaNacimiento." ".$this->estadoCivil." ".$this->pasatiempos;
	echo "<br>".$this->nombreCompleto();
}

private function nombreCompleto(){
	return $this->nombre." ".$this->apellido;
}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre) {
		$this->nombre = $nombre;
		return $this;
	}
	public function getApellido() {
		return $this->apellido;
	}
	public function setApellido($apellido) {
		$this->apellido = $apellido;
		return $this;
	}
	public function getDni() {
		return $this->dni;
	}
	public function setDni($dni) {
		$this->dni = $dni;
		return $this;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
		return $this;
	}
	public function getFechaNacimiento() {
		return $this->fechaNacimiento;
	}
	public function setFechaNacimiento($fechaNacimiento) {
		$this->fechaNacimiento = $fechaNacimiento;
		return $this;
	}
	public function getEstadoCivil() {
		return $this->estadoCivil;
	}
	public function setEstadoCivil($estadoCivil) {
		$this->estadoCivil = $estadoCivil;
		return $this;
	}
	public function getPasatiempos() {
		return $this->pasatiempos;
	}
	public function setPasatiempos($pasatiempos) {
		$this->pasatiempos = $pasatiempos;
		return $this;
	}
	
}


