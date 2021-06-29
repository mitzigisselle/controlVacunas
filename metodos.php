<?php

    class metodos{
        public function mostrarDatos($sql){
            $c= new conectar();
            $conexion=$c->conexion();

            $result = mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        public function insertarDatosNombre($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into t_ninos (no_registro,nombre,hepatitisA,hepatitisB,influenza,sarampion)
                                values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')";
            return $result=mysqli_query($conexion,$sql);
        }

        public function actualizaDatosNombre($datos){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE t_ninos set no_registro='$datos[0]',
                                        nombre='$datos[1]',
                                        hepatitisA='$datos[2]',
                                        hepatitisB='$datos[3]',
                                        influenza='$datos[4]',
                                        sarampion='$datos[5]'
                                    where id='$datos[6]'";
            return $result=mysqli_query($conexion,$sql);
        }


        public function eliminarDatosNombre($id){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from t_ninos where id='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
    }

?>