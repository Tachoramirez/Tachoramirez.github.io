<?php
    require('Conexion.php');

    $herramienta = $_POST['herramienta'];
    $empleado = $_POST['empleado'];
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];

    $query = "INSERT INTO prestamos (id_herramienta, id_empleado, fechaInicio, fechaFin) VALUES ('$herramienta', '$empleado', '$inicio', '$fin')";
    $insert = mysqli_query($conexion, $query);

    if ($insert) {
      echo "Material agregado";
      header('Location: ../forms/addPrestamos.php');
    }else{
      echo "Material no agregado";
      header('Location: ../forms/addPrestamos.php');
    }
?>