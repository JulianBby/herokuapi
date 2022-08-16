<?php 
class Daaa{
    private static $conexion=NULL;
    private function __construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=bhssuxxpgwp075yoblua-mysql.services.clever-cloud.com; dbname=bhssuxxpgwp075yoblua', 'un6dmrdq9gd8pk10', '7YKlrIYOhYnivTZeSrOh', $pdo_options); //Usuario general de XAMPP --> root, $pdo_options envia la información
        return self::$conexion; 
    }
}
?>