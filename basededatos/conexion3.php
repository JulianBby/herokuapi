<?php
class DB{


    private function __construct(){}

    public static function conectar(){    
        $servername = "bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com";
        $database = "bkc3739td52nqn13e3iu";
        $username = "u85yrqverx1h8saf";
        $password = "M30qXRJgkOtmmkmOjwvS";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        return $conn;
    }

}
?>