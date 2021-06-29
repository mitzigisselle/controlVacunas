<?php
    require_once "conexion.php";
    require_once "metodos.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Crud</title>
</head>
<body>

<div class="container mt-3">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div style="background:transparent !important" class="jumbotron jumbotron-fluid">
        
                        <h1 class="display-5 text-center"> Control de vacunas</h1>
                        <div class="card border border-info" style="background:transparent !important" >
                            <div class="card-body">
                            <form action="procesos/insertar.php" method="post" >
                                <label for=""><strong>No_registro:</strong></label>
                                <p></p>
                                <input type="text" name="no_registro">
                                <p></p>
                                <label for=""><strong>Nombre:</strong></label>
                                <p></p>
                                <input type="text" name="nombre">
                                <p></p>
                                <hr>
                                <h2><strong>Vacunas</strong></h2>
                                <div class="row">
                                    <div class="col">
                                        <label for=""><strong>HepatitisA</strong></label>
                                        <input type="hidden" name="hepatitisA" value="no">
                                        <input type="checkbox" name="hepatitisA" value="si">
                                    </div>
                                    <div class="col">
                                        <label for=""><strong>HepatitisB</strong></label>
                                        <input type="hidden" name="hepatitisB" value="no">
                                        <input type="checkbox" name="hepatitisB" value="si">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for=""><strong>Influenza</strong></label>
                                        <input type="hidden" name="influenza" value="no">
                                        <input type="checkbox" name="influenza" value="si">
                                    </div>
                                    <div class="col">
                                        <label for=""><strong>Sarampion</strong></label>
                                        <input type="hidden" name="sarampion" value="no">
                                        <input type="checkbox" name="sarampion" value="si">
                                    </div>
                                </div>
                                
                                
                                
                                
                                <button class="btn btn-primary">Agregar</button>
                            </form>
                        
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
</div>

  
    
        

    


    <br><br>


    <div class="container mb-5">
        <div class="row">
            <div class="col sm-2"></div>
            <div class="col sm-8">
            
                <table style="border-collapse: collapse;" border="1">
                    <tr style="background-color:#7CB4B9">
                        
                        <td class="text-dark">No_registro</td>
                        <td class="text-dark">Nombre</td>
                        <td class="text-dark">HepatitisA</td>
                        <td class="text-dark">HepatitisB</td>
                        <td class="text-dark">Influenza</td>
                        <td class="text-dark">Sarampion</td>
                        <td class="text-dark">Actualizar</td>
                        <td class="text-dark">Eliminar</td>
                    </tr>

                    <?php
                        $obj = new metodos();
                        $sql="SELECT id, no_registro, nombre, hepatitisA, hepatitisB, influenza, sarampion from t_ninos";
                        $datos=$obj->mostrarDatos($sql);

                        foreach($datos as $key){

                        

                    ?>
                    <tr style="background-color: #515555">
                        <td><?php echo $key['no_registro']; ?></td>
                        <td><?php echo $key['nombre']; ?></td>
                        <td><?php echo $key['hepatitisA']; ?></td>
                        <td><?php echo $key['hepatitisB']; ?></td>
                        <td><?php echo $key['influenza']; ?></td>
                        <td><?php echo $key['sarampion']; ?></td>
                        <td>
                            <a  href="editar.php?id=<?php echo $key['id'] ?>">Editar</a>
                        </td>
                        <td>
                            <a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php

                        }
                    ?>

                </table>
            </div>
            <div class="col sm-2"></div>
        </div>
    </div>






    



    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
</body>
</html>
