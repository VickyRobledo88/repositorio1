<?php
include 'Persona.php';
include 'Alumno.php';

include 'conexion.php';
include 'PersonaDAO.php';


$per1=new Alumno('Juana', 'Robles', '2626727', 'F', '10-02-1970', 'casada', 'Bailarina','Programacion', 7.8);
$per1->imprimir();


$personaDAO=new PersonaDAO($mbd);