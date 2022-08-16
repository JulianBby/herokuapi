<?php 
class DB{
    private static $conexion=NULL;
    private function __construct(){}

    public static function conectar(){
        $localhost = 'bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com';
        $database = 'bkc3739td52nqn13e3iu';
        $username = 'u85yrqverx1h8saf';
        $password = 'M30qXRJgkOtmmkmOjwvS';
        self::$conexion = new PDO('mysql:host=$localhost; dbname=$database', $username, $password);
        return self::$conexion; 
    }
}
?>