<?php
require_once('conexionOn.php');
require_once('usuario.php');

class crudUsuario{

    public function __construct(){}

    //insertar los datos del usuario
    public function insertar($usuario){
        $db=DB::getConnection();
        $insert=$db->prepare('INSERT INTO USUARIOS VALUES(NULL, :nombre, :numeroDoc, :correo, :clave)');
        $insert->bindValue('nombre', $usuario->getNombre());
        $insert->bindValue('numeroDoc', $usuario->getNum());
        $insert->bindValue('correo', $usuario->getCorreo());
        //encripta contraseña
        $pass=password_hash($usuario->getClave(), PASSWORD_DEFAULT);
        $insert->bindValue('clave', $pass);
        $insert->execute();
    }

    //obtiene el usuario para el login
    public function obtenerUsuario($correo, $clave){
        $db=DB::getConnection();
        //$select=$db->prepare("SELECT * FROM USUARIOS WHERE nombre='$nombre'");//AND clave=:clave //primero es el campo de la tabla, el segundo es el del formulario ":" valide que sea el mismo
        $select=$db->prepare('SELECT * FROM USUARIOS WHERE correo=:correo');
        $select->bindValue('correo', $correo);
        $select->execute();
        $registro = $select->fetch();
        $usuario = new Usuario();
        //verificar si la clave es correcta
        if (password_verify($clave, $registro['clave'])){
            //si es correcta, asigna los valores que trae desde la base de datos
            $usuario->setId($registro['id']);
            $usuario->setNombre($registro['nombre']);
            $usuario->setNum($registro['numeroDoc']);
            $usuario->setCorreo($registro['correo']);
            $usuario->setClave($registro['clave']);
        }
        return $usuario;
    }

    //busca el nombre del usuario si existe
    public function buscarUsuario($numeroDoc){
        $db=DB::getConnection();
        //$select=$db->prepare('SELECT * FROM USUARIOS WHERE nombre=:nombre');
        $select=$db->prepare('SELECT * FROM USUARIOS WHERE numeroDoc=:numeroDoc');
        $select->bindValue('numeroDoc', $numeroDoc);
        $select->execute();
        $registro=$select->fetch();
        if($registro['id']!=NULL){
            $usado=False;
        }else{
            $usado=True;
        }
        return $usado;
    }
}