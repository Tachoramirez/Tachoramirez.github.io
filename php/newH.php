<?php
    require('Conexion.php');

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $disponibilidad = $_POST['disponibilidad'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO herramientas (nombre, marca, modelo, disponibilidad, descripcion, categoriaHerramienta ) VALUES ('$nombre', '$marca', '$modelo', '$disponibilidad', '$descripcion', '$categoria')";
    $insert = mysqli_query($conexion, $query);

    if ($insert) {
      echo "Herramienta agregada";
      header('Location: ../forms/addHerramientas.php');
    }else{
      echo "Herramienta no agregada";
      header('Location: ../forms/addHerramientas.php');
  
    }
?>