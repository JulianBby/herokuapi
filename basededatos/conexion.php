<?php 
class DBAA{
    private static $conexion=NULL;
    private function __construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=localhost; dbname=hjg', 'root', '', $pdo_options); //Usuario general de XAMPP --> root, $pdo_options envia la información
        return self::$conexion; 
    }
}
?>