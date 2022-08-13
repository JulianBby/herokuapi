<?php
require_once('usuario.php');
require_once('crud_usuario.php');
require_once('conexionOn.php');

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
    if($crud->buscarUsuario($_POST['numeroDoc'])){
        $crud->insertar($usuario);
        header('Location: ../index.php');
    }else{
        header('Location: error.php?mensaje=El nombre de usuario ya existe');
    }
    
}elseif (isset($_POST['entrar'])){//verifica si la variable entrar está definida
    $usuario = $crud->obtenerUsuario($_POST['correo'], $_POST['pas']);

    //si el id del objeto retornado no es null, quiere decir que no encontró un registro en la base de datos
    if ($usuario->getId() != NULL){
        $_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
        header('Location: ../entradas.php'); //envia la página que inicia el usuario
    }else{
        header('Location: error.php?mensaje=Tu nombre de usuario o contraseña son incorrectos');
        
        //cuando los datos son incorrectos envia a la página de error
        }

 }elseif (isset($_POST['salir'])){ //cuando presiona el botón salir
    header('Location: ../index.php');
    unset($_SESSION['usuario']);//destruye la sesión
}

?>

