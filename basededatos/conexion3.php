<?php
class DBAAA{
    private function __construct(){}

    public static function conectar(){
        $dsn = 'mysql:dbname=bkc3739td52nqn13e3iu; host=bkc3739td52nqn13e3iu-mysql.services.clever-cloud.com';
        $usuario = 'u85yrqverx1h8saf';
        $password = 'M30qXRJgkOtmmkmOjwvS';

        try {
            $gbd = new PDO($dsn, $usuario, $password);
        } catch(PDOException $e){
            echo 'Fallo la conexión: ' .$e->getMessage();
        }      

    return $gbd;

}
}
?>