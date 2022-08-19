<?php 
class DB{
    
    private function __construct(){}

    public static function conectar(){
        $localhost = 'bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com';
        $database = 'bkc3739td52nqn13e3iu';
        $username = 'u85yrqverx1h8saf';
        $password = 'M30qXRJgkOtmmkmOjwvS';
        
        $conexion = new PDO('mysql:host=bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com;dbname=bkc3739td52nqn13e3iu', $username, $password);
        return $conexion; 
    }
}
?>