<?php



require 'AbstractManager.php';

class UserManager extends AbstractManager {
    
    public function getUserByUsername(string $username): ?User {
        
        $query = $db->prepare("SELECT * FROM users WHERE username = :username");

        $parameters = [
            "username" => $username,
        ];

        $query->execute($parameters);
        $userData = $query->fetch(PDO::FETCH_ASSOC);
        if ($userData) {
            $user = new User($userData["username"], $userData["email"], $userData["password"], $userData["role"]);
            return $user;
        } else {
            return null;
        }
    }

        

}

    
    
   
?>