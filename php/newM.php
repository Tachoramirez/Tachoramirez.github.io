<?php
    require('Conexion.php');

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO materiales (nombre, cantidad, descripcion, categoriaMaterial) VALUES ('$nombre', '$cantidad', '$descripcion', '$categoria')";
    $insert = mysqli_query($conexion, $query);

    if ($insert) {
      echo "Material agregado";
      header('Location: ../forms/addMateriales.php');
    }else{
      echo "Material no agregado";
      header('Location: ../forms/addMateriales.php');
  
    }
?>