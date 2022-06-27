
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
    <script rel="text/javascript" src="../assets/materialize/js/materialize.min.js"></script>
    <script rel="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Agregar</title>

</head>
<body bgcolor="#e1f5fe">
    <nav class="blue-grey darken-4" >
        <div class="container">
            <div class="">
                <a href="../index.php" title="Inicio" class=""><img style="height: 60px; width:150px;" src="../assets/img/logo.jpeg" alt=""></a>
            </div>
        </div>
    </nav>
    <?php
        require('../php/Conexion.php');
        require('../php/getH.php');
        require('../php/getT.php');

    ?>
    <div class="container">
        <div class="row">
            <div class="col s2 md2 lg2 "><a style="color: #000;" title="ir a préstamos" href="../index.php"><h4>Préstamos</h4></a></div>
        </div><hr>
        <br>
        <br>
        <form style="background-color: #FFF;" method="post" action="../php/newP.php">
            <div class="card white">
                <div class="card-content black-text">
                <span class="card-title">Solicitar préstamo</span>
                <br><br>
                <div  class="row">
                    <div class="col s12 md12 lg12">
                        <div class="row">
                            <div class="col s1 md1 lg1"></div>
                            <div class="input-field col s5 md5 lg5">
                                <select required name="herramienta">
                                    <option>Elige una opción</option>
                                    <?php
                                        foreach ($listaH as $herramienta) {
                                    ?>
                                        <option value="<?php echo $herramienta['id_herramienta'];?>"><?php echo $herramienta['nombre'];?></option>
                                    <?php        
                                        }
                                    ?>
                                </select>
                                <label for="">Herramienta</label>
                            </div>
                            
                            <div class="input-field col s5 md5 lg5">
                                <select required name="empleado">
                                    <option>Elige una opción</option>
                                    <?php
                                        foreach ($empleados as $empleado) {
                                    ?>
                                        <option value="<?php echo $empleado['id_empleado'];?>"><?php echo $empleado['nombres'], " ".$empleado['apellidos']  ;?></option>
                                    <?php        
                                        }
                                    ?>
                                </select>
                                <label for="">Trabajador</label>
                            </div>
                            
                            <div class="col s1 md1 lg1"></div>
                        </div><br>
                        <div class="row">
                            <div class="col s1 md1 lg1"></div>
                            <div class="col s5 md5 lg5">
                                <input required type="date" name="inicio" class=""><label for="">Fecha solicitud</label>
                            </div>
                            <div class="col s5 md5 lg5">
                                <input required type="date" name="fin" class=""><label for="">Fecha entrega</label> 
                            </div>
                            <div class="col s1 md1 lg1"></div>
                        </div><br><br>
                        <div class="row">
                        <div class="col s10 md10 lg10"></div>
                        <div class="col s1 md1 lg1">
                            <button class="btn waves-effect waves-light green" type="submit" name="action">Agregar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                        <div class="col s1 md1 lg1"></div>
                        </div>
                    </div>        
                </div>   
                </div>
            </div> 
        </form>
    </div>
</body>
<script>
    $(document).ready(function(){
    $('select').formSelect();
    });

    $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>
</html>