<?php 
class DBa{
    public function getConnection(){
        $localhost = 'bhssuxxpgwp075yoblua-mysql.services.clever-cloud.com';
        $database = 'bhssuxxpgwp075yoblua';
        $user = 'un6dmrdq9gd8pk10';
        $password = '7YKlrIYOhYnivTZeSrOh';

        $link = new PDO("mysql:host=$localhost;dbname=$database", $user, $password);
        
        return $link;
    }
}
?>