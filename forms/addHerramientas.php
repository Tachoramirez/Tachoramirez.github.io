
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
    ?>
    <div class="container">
        <div class="row">
            <div class="col s2 md2 lg2 "><a style="color: #000;" title="ir a herramientas" href="../herramientas.php"><h4>Inventario</h4></a></div>
        </div><hr>
        <br>
        <br>
        <form style="background-color: #FFF;" method="post" action="../php/newH.php">
            <div class="card white">
                <div class="card-content black-text">
                    <span class="card-title">Ingresar herramienta</span>
                    <br><br>
                    <div  class="row">
                        <div class="col s12 md12 lg12">
                            <div class="row">
                                <div class="col s1 md1 lg1"></div>
                                <div class="col s4 md4 lg4">
                                    <input type="text" required name="nombre" placeholder="Nombre"> 
                                </div>
                                <div class="col s3 md3 lg3">
                                    <input type="text" required name="marca" placeholder="Marca"> 
                                </div>
                                <div class="col s3 md3 lg3">
                                    <input type="text" required name="modelo" placeholder="Modelo"> 
                                </div>
                                <div class="col s1 md1 lg1"></div>
                            </div><br>
                            <div class="row">
                                <div class="col s1 md1 lg1"></div>
                                <div class="col s3 md3 lg3">
                                    <input type="text" required name="disponibilidad" placeholder="Disponibilidad"> 
                                </div>
                                <div class="input-field col s4 md4 lg4">
                                    <select name="categoria">
                                        <option>Elige una opción</option>
                                        <?php
                                            $query = "SELECT * FROM categoriaherramientas";
                                            $herramientas = mysqli_query($conexion, $query);
                                            foreach ($herramientas as $herramienta) {
                                        ?>
                                            <option required value="<?php echo $herramienta['id_categoriaHerramienta'];?>"><?php echo $herramienta['descategoria'];?></option>
                                        <?php        
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col s4 md4 lg4">
                                    <textarea class="materialize-textarea" required name="descripcion" id="" cols="30" rows="20" placeholder="Descripción"></textarea> 
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
</script>
</html>