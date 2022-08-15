<?php 
class DB{
    private function __construct(){}

    public static function conectar(){
        $localhost = 'bhssuxxpgwp075yoblua-mysql.services.clever-cloud.com';
        $database = 'bhssuxxpgwp075yoblua';
        $user = 'un6dmrdq9gd8pk10';
        $password = '7YKlrIYOhYnivTZeSrOh';

        $linkk = new PDO("mysql:host=$localhost;dbname=$database", $user, $password);
        
        return $linkk;
    }
}
?>