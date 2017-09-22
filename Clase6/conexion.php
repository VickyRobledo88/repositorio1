<?php
try{
	$mbd=new PDO('mysql:host=localhost;dbname=curso','root','');	//Abre la base de datos
	/*
	foreach ($mbd->query('SELECT apellido FROM Persona')as $fila){
		print_r($fila);
	}
	$mbd=null;	//Cierra la conexion
	*/
	
}catch (PDOException $e){
	print "Error!: ".$e->getMessage()."<br/>";
	die();
}
?>