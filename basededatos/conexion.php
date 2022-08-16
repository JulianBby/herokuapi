<?php 
class DB{
    private static $conexion=NULL;
    private function __construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com; dbname=bkc3739td52nqn13e3iu', 'u85yrqverx1h8saf', 'M30qXRJgkOtmmkmOjwvS', $pdo_options); //Usuario general de XAMPP --> root, $pdo_options envia la información
        return self::$conexion; 
    }
}
?>