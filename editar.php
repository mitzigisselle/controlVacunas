<?php
    require_once "conexion.php";
    $obj=new conectar();
    $conexion=$obj->conexion();
    $id=$_GET['id'];
    $sql="SELECT no_registro, nombre, hepatitisA, hepatitisB, influenza, sarampion
                from t_ninos where id='$id'";
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div style="background:transparent !important" class="jumbotron jumbotron-fluid" style="background-color:#0D8791">
        
                        <h1 class="display-5 text-center"> Control de vacunas</h1>
                        <div class="card border border-info" style="background:transparent !important">
                            <div class="card-body">
                                <form action="procesos/actualizar.php" method="post">
                                    <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                                    <label for=""><strong>No_registro</strong></label>
                                    <p></p>
                                    <input type="text" name="no_registro" value="<?php echo $ver[0] ?>" required>
                                    <p></p>
                                    <label for=""><strong>Nombre</strong></label>
                                    <p></p>
                                    <input type="text" name="nombre" value="<?php echo $ver[1] ?>" required>
                                    <p></p>
                                    <hr>
                                    <h2><strong>Vacunas</strong></h2>
                                    <div class="row">
                                        <div class="col">
                                            <label for=""><strong>Hepatitis A</strong></label>
                                            <input type="hidden" name="hepatitisA" value="no">
                                            <input type="hidden" name="hepatitisA" value="si">
                                            <input type="checkbox" name="hepatitisA" value="<?php echo $ver[2] ?>">

                                        </div>
                                        <div class="col">
                                            <label for=""><strong>Hepatitis B</strong></label>
                                            <input type="hidden" name="hepatitisB" value="no">
                                            <input type="hidden" name="hepatitisB" value="si">
                                            <input type="checkbox" name="hepatitisB" value="<?php echo $ver[3] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for=""><strong>Influenza</strong></label>
                                            <input type="hidden" name="influenza" value="no">
                                            <input type="hidden" name="influenza" value="si">
                                            <input type="checkbox" name="influenza" value="<?php echo $ver[4] ?>">
                                         </div>
                                         <div class="col">
                                            <label for=""><strong>Sarampion</strong></label>
                                            <input type="hidden" name="sarampion" value="no">
                                            <input type="hidden" name="sarampion" value="si">
                                            <input type="checkbox" name="sarampion" value="<?php echo $ver[5] ?>">
                                         </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col sm-2"></div>
                                        <div class="col sm-8">
                                        <button class="btn btn-info btn-center">Agregar</button>
                                        </div>
                                        <div class="col sm-2"></div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
        
                    </div>
                </div>
                <div class="col-sm-2"></div>
    </div>
</div>





    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
    
</body>
</html>

