<?php

class AbstractManager 
{
    private array $users = [];
    private PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "laurebonnevalle_bre01_blog_poo";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

        $user = "laurebonnevalle";
        $password = "0143d153a0a995dd144dbabddf0210fe";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
            
        );
        var_dump($db);
    }
    
    
    
};

?>

