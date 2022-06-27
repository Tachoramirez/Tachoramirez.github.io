<?php
    require('Conexion.php');
    $query = "SELECT * FROM materiales inner join categoriamateriales on categoriamateriales.id_categoriaMaterial = categoriaMaterial";
	$listaM = mysqli_query($conexion, $query);

?>