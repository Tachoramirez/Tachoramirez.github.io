<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Materiales</title>
</head>
<body bgcolor="#e1f5fe">
<?php 
    include('header.php');
    require('php/conexion.php');
    require('php/getM.php');
?>
    <div class="container">
        <div class="row">
            <div class="col s12 md12 lg12 "><h4>Materiales</h4><a title="Agregar material" href="forms/addMateriales.php" class="btn-floating btn-small waves-light green"><i class="material-icons">add</i></a></div>
        </div><hr>
        <br>
        <br>
        <div class="card white">
            <div class="card-content black-text">
                <div class="row">
                    <div style="background-color: #FFF;" class="col s12 md12 lg12">
                        <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($mostrar = mysqli_fetch_array($listaM)) { ?>
                                    <tr>
                                        <td><?php echo $mostrar['nombre'];?></td>
                                        <td><?php echo $mostrar['cantidad'];?></td>
                                        <td><?php echo $mostrar['descripcion'];?></td>
                                        <td><?php echo $mostrar['descategoria'];?></td>
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