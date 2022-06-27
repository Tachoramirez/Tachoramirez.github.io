<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Trabajadores</title>
</head>
<body bgcolor="#e1f5fe">
<?php 
    include('header.php');
    require('php/conexion.php');
    require('php/getT.php');
?>
    <div class="container">
        <div class="row" >
            <div class="col s12 md12 lg12 "><h4>Trabajadores</h4><a title="Agregar material" href="forms/addTrabajadores.php" class="btn-floating btn-small waves-light green"><i class="material-icons">add</i></a></div>
        </div><hr>
        <br>
        <br>
        <div class="card white">
            <div class="card-content black-text">
                <div class="row">
                    <div style="background-color: #FFF;" class="col s12 md12 lg12">
                        <table class="striped">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Teléfono</th>
                                <th>Dirección</th>
                                <th>Cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($mostrar = mysqli_fetch_array($empleados)) { ?>
                                    <tr>
                                        <td><?php echo $mostrar['nombres'];?></td>
                                        <td><?php echo $mostrar['apellidos'];?></td>
                                        <td><?php echo $mostrar['telefono'];?></td>
                                        <td><?php echo $mostrar['direccion'];?></td>
                                        <td><?php echo $mostrar['descargo'];?></td>
                                    </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>