<?php
    require('Conexion.php');
    $query = "SELECT * FROM herramientas inner join categoriaherramientas on categoriaherramientas.id_categoriaHerramienta = herramientas.categoriaHerramienta";
	$listaH = mysqli_query($conexion, $query);

?>