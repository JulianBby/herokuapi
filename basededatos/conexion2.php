<?php 
class DBaaaaaa{
    private function __construct(){}

    public static function conectar(){
        $localhost = 'bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com';
        $database = 'bkc3739td52nqn13e3iu';
        $user = 'u85yrqverx1h8saf';
        $password = 'u85yrqverx1h8saf';

        $linkk = new PDO("mysql:host=$localhost;dbname=$database", $user, $password);
        
        return $linkk;
    }
}
?>