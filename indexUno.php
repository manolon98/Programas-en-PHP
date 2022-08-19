<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Libreria de sweetalert  -->
    <script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script> 
    <!-- <script type="text/javascript" src="../alerta.js"></script>-- NO FUNCIONO-->
    <title>FormularioUno</title>
</head>
<?php include("../TareaUno/header.php") ?>

<body>
    <div class="container-fluid p-5 mt-5 position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col boder">
                <form method="post" action="indexUno.php">
                    <label class="form-label">Ingrese el Número Uno</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">#</span>
                        <input type="Number" name = "numero1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número 1" required>
                    </div>
                    <label class="form-label">Ingrese el Número Dos</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">#</span>
                        <input type="Number" name = "numero2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Número 2" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Operar</button>
                </form>
            </div>
            <br /><br />
            <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"):
            ?>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Respuesta de la Suma
                    </div>
                    <div class="card-body">
                       <?php
                            //Proceso de la suma
                            $resultado = $_REQUEST["numero1"] + $_REQUEST["numero2"];
                            echo "La suma es: " . round($resultado,2);
                       ?>
                    </div>
                </div>
                </br>
                <div class="card">
                    <div class="card-header">
                        Respuesta de la Resta
                    </div>
                    <div class="card-body">
                        <?php 
                        //Proceso de la resta
                        $resultado = $_REQUEST["numero1"] - $_REQUEST["numero2"];
                        echo "La resta es: " .  round($resultado,2);
                        ?>
                    </div>
                </div>
                </br>
                <div class="card">
                    <div class="card-header">
                        Respuesta de la Multiplicación
                    </div>
                    <div class="card-body">
                        <?php 
                        //Proceso de multiplicación 
                        $resultado = $_REQUEST["numero1"] * $_REQUEST["numero2"];
                        echo "La multiplicación es: " . round($resultado,2);
                        ?>
                    </div>
                </div>
                </br>

                <div class="card">
                    <div class="card-header">
                        Respuesta de la División
                    </div>
                    <div class="card-body">
                    <?php 
                        $n1 = $_REQUEST["numero1"];
                        $n2 =  $_REQUEST["numero2"];
                        
                        //Condición para division entre cero pero despues de darle "OK" a la alerta se observa el resultado de las demas operaciones
                        if($n2 == 0 ){
                            //Muestra una alerta 
                            echo '<script type="text/javascript">'
                            , 'swal ( " ¡Error! " , " ¡Dividiste entre cero! " ,  "error" );'
                            , '</script>'
                            ;
                        }
                        else{
                            //Proceso normal de la division
                            $resultado = $n1 / $n2;
                            echo "La Division es: " . round($resultado,2);
                        }

                    ?>
                    </div>
                </div>
                </br>
                <div class="card">
                    <div class="card-header">
                        Respuesta Modulo
                    </div>
                    <div class="card-body">
                        <?php 
                            //Valor Absoluto
                            $n1 = $_REQUEST["numero1"];
                            $n2 =  $_REQUEST["numero2"];

                            echo "El modulo del numero 1 es: " . abs($n1) . "</br>";
                            echo "El modulo del numero 2 es: " . abs($n2);
                        ?>
                    </div>
                </div>
            </div>
            <?php
                endif;
            ?>
        </div>
    </div>

</body>
</html>