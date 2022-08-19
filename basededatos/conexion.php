<?php
    $conexion = new mysqli('bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com','u85yrqverx1h8saf', 'M30qXRJgkOtmmkmOjwvS', 'bkc3739td52nqn13e3iu', 3306);
//comprobar conexión
if(mysqli_connect_errno()){
    printf("Fallo la conexión");
}else{
    //printf("Estas conectado");
}
?>