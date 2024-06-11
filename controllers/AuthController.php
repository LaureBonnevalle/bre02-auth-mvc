<?php

 
require 'UserManager.php';

class AuthController {
    
    public function __construct(){}
   
    
    
        //public function Connexion($username, $password) {
        //si route = connexion on affiche le formulaire de connexion
        if ($get["route"] === "connexion")
        {
        
            require 'formulaireConnexion.phtml';
        }
        
        else { 
            //on fait rien
        }
        
        
    }
        //On check la connexion
        
    public function CheckConnexion()
    {
        if ($get["route"] === "check-connexion")  //à la soumission du formulaire
        {
            Check(); //on applique la fonction Check qui retourne true or false
            
            if (Check = true)
            {
                // si check = true on stocke dans un $_SESSION
            }
            else (Check = false)
            {
                // si check = false on redirige vers la page de connexion (ajouter une boucle pour que au 3e essai ça revienne sur page d'accueil)
            }
        }
        else
        {
         //on revient sur la page d'accueil et on peut s'inscrire       
        }
        

        //Route check connexion : Dans la méthode correspondant à la route index.php?route=check-connexion :
        //Récupérez les champs du formulaire depuis $_POST.
        //Vérifiez si l’utilisateur existe dans la base de données en utilisant son email.
        //Vérifiez si le mot de passe soumis correspond à celui enregistré dans la base de données.
        //Si tout est bon, stockez dans $_SESSION que l’utilisateur est connecté.
        //Redirigez vers la bonne route.
        //si true on atterit sur la page EspacePerso
        //sinon si false on revient sur la page de connexion
}
?>