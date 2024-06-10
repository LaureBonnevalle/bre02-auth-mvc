<?php

require "../Managers/AbstractManager.php";

$parameters = [
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'username'=>$_POST['username'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
   
    ];
$db =    
$query = $db->prepare('INSERT INTO users(id, firstname, lastname, email, password) VALUES (NULL, :first_name, :last_name, :email, :password, :role)');
$query->execute($parameters);

header('Location: ../index.php?route=home');

?>