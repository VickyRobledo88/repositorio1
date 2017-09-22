<?php

class Alumno extends Persona {
	private $nombreCurso;
	private $promedio;
	
public function __construct($nom, $ape, $dni, $sexo, $fechaNac, $estado, $pasa, $nomCur,$prom)	{
	$this->nombreCurso=$nomCur;
	$this->promedio=$prom;
	Persona::__construct($nom, $ape, $dni, $sexo, $fechaNac, $estado, $pasa);
}

public function imprimir(){
	Persona::imprimir();
	echo $this->nombre." ".$this->nombreCurso." ".$this->promedio;
}
}