<?php 
class Conexion{
    public static function Conectar(){
        $con = mysqli_connect('localhost','root','','tickets');
        // if($con){
        //     echo 'conexion exitosa';
        // } else{
        //     echo 'error de conexion';
        // }

        return $con;
    }

}