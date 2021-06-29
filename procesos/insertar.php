<?php
    require_once "../conexion.php";
    require_once "../metodos.php";

    $no_registro=$_POST['no_registro'];
    $nombre=$_POST['nombre'];
    $hepatitisA=$_POST['hepatitisA'];
    $hepatitisB=$_POST['hepatitisB'];
    $influenza=$_POST['influenza'];
    $sarampion=$_POST['sarampion'];
    $id=$_POST['id'];

    $datos = array($no_registro, $nombre, $hepatitisA, $hepatitisB, $influenza, $sarampion, $id);

    $obj=new metodos();

    if($obj->insertarDatosNombre($datos)==1){
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }

?>
