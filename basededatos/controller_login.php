<?php
require_once('usuario.php');
require_once('crud_usuario.php');
require_once('conexion.php');

//inicio de sesion
session_start();

$usuario=new Usuario();
$crud=new crudUsuario();
//verifica si la variable registrarse está definida
//se da que está definida cuando el usuario se loguea, ya que la envia en la petición 
if(isset($_POST['registrar'])){
    $usuario->setNombre($_POST['nombre']);
    $usuario->setNum($_POST['numeroDoc']);
    $usuario->setCorreo($_POST['correo']);
    $usuario->setClave($_POST['pas']);
    $crud->insertar($usuario);
    header('Location: ../index.php');

    
}
?>

