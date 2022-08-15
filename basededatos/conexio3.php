<?php

$mysqli = new mysqli("bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com", "u85yrqverx1h8saf", "u85yrqverx1h8saf", "bkc3739td52nqn13e3iu", 3306);
if ($mysqli ->connect_errno){
    echo "Fallo al conectar a MYSQL: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

