<?php
    require('Conexion.php');
    $query = "SELECT * FROM prestamos inner join empleados on empleados.id_empleado = prestamos.id_empleado inner join herramientas on herramientas.id_herramienta = prestamos.id_herramienta ";
	$prestamos = mysqli_query($conexion, $query);

?>