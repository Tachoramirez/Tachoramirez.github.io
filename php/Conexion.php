<?php
	$database = 'inventarioproinc';
	$server = '127.0.0.1';
	$usuario = 'root';
	$contra = '';	

	$conexion = new mysqli($server, $usuario, $contra, $database);
	$conexion->set_charset("utf8");

	if (!$conexion) {
		die("Error al conectar con la base de datos");
	}else{
		('conectado correctamente');
	}
?>