<?php
    require('Conexion.php');

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $cargo = $_POST['cargo'];

    $query = "INSERT INTO empleados (nombres, apellidos, telefono, direccion, cargo) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$cargo')";
    $insert = mysqli_query($conexion, $query);

    if ($insert) {
      echo "Trabajador agregado";
      header('Location: ../forms/addTrabajadores.php');
    }else{
      echo "Trabajador no agregado";
      header('Location: ../forms/addTrabajadores.php');
  
    }
?>