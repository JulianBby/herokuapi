<?php

$hostname = "bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com";
$username = "u85yrqverx1h8saf";
$password = "M30qXRJgkOtmmkmOjwvS";
$dbname = "bkc3739td52nqn13e3iu";

$db = new mysqli($hostname, $username, $password, $dbname, 3306);


if ($db->connect_errno){
    echo "Fallo la conexión a la base de datos";
}

?>