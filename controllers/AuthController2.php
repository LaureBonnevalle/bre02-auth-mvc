<?php

// AuthController.php

class AuthController
// 

{
    // Méthode pour afficher le formulaire de connexion
    public function loginForm()
    {
        // Chargez le template pour le formulaire de connexion
        // Vous pouvez utiliser un moteur de template comme Twig
        // pour rendre le formulaire plus propre et maintenable
        require 'templates/formulaireConnexion.phtml';
    }

    // Méthode pour gérer la soumission du formulaire de connexion
    public function login()
    {
        // Récupérez les champs du formulaire depuis $_POST
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $userManager = new UserManager();
        // Vérifiez si l'utilisateur existe dans la base de données
        // Utilisez votre UserManager pour cela
        $user = $userManager->getUserByUsername($username);

        if ($user && password_verify($password, $user->getHashedPassword())) {
            // L'utilisateur est authentifié
            // Stockez dans $_SESSION que l'utilisateur est connecté
            $_SESSION['user_id'] = $user->getId();

            // Redirigez vers la page d'accueil ou une autre page
           
            header('Location: index.php?route=PagePerso');
            exit;
        } else {
            // Affichez un message d'erreur (par exemple, "Identifiants incorrects")
            // et redirigez vers la page de connexion
            echo "mot de passe incorrect";
            header('Location: index.php?route=home');
            exit;
        }
    }

    // Méthode pour gérer la déconnexion
    public function logout()
    {
        // Déconnectez l'utilisateur en supprimant la session
        session_destroy();

        // Redirigez vers la page d'accueil ou une autre page
        header('Location: index.php');
        exit;
    }
}
?>