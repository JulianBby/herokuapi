<?php
require_once('conexion.php');
require_once('usuario.php');

class crudUsuario{

    public function __construct(){}

    //insertar los datos del usuario
    public function insertar($usuario){
        include "conexion.php";
        $sentencia= 'INSERT INTO USUARIOS VALUES(NULL, :nombre, :numeroDoc, :correo, :clave)';
        $conexion->query($sentencia)or die("Error al ingresar los datos".mysqli_error($conexion));
    }

}