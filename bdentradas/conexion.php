<?php
    $conexion = new mysqli('localhost', 'root', '', 'hjg');
//comprobar conexión
if(mysqli_connect_errno()){
    printf("Fallo la conexión");
}else{
    //printf("Estas conectado");
}
?>