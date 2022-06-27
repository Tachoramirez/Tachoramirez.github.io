<?php
    require('Conexion.php');
    $query = "SELECT * FROM empleados inner join cargos on cargos.id_cargo = empleados.cargo ";
	$empleados = mysqli_query($conexion, $query);

?>