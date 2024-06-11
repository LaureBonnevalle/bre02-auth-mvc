<?php

require "../Managers/AbstractManager.php";

$parameters = [
    
    'username'=>$_POST['username'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
   
    ];
$db =    
$query = $db->prepare('INSERT INTO users(id,username, email, password) VALUES (NULL, :username, :email, :password, :role)');
$query->execute($parameters);

header('Location: ../index.php?route=connexion');

?>