<?php 


class Router {
    public function handleRequest(array $get): void {
        $pageController = new PageController();
        $authController = new AuthController();

 
        if (isset($get["route"]) && $get["route"] === "connexion") 
        {
            $authController->LoginForm();
        }
        elseif (isset($get["route"]) && $get["route"] === "check-connexion")
        {
            $authController->Login();
        }
        elseif (isset($get["route"]) && $get["route"] === "EspacePerso")
        {
            $authController ->
        }
        
        elseif (isset($get["route"]) && $get["route"] === "inscription") 
        {
            $authController->register();
        } 
        elseif (!isset($get["route"])) 
        {
            $pageController->home();
        }
          
        
        else {
            $pageController->notFound();
        }
    }
}

?>