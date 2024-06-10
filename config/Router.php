<?php 

class Router {
    public function handleRequest(array $get): void {
        $pageController = new PageController();

        if (isset($get["route"]) && $get["route"] === "EspacePerso") 
        {
            $pageController->connexion();
        } 
        elseif (isset($get["route"]) && $get["route"] === "inscription") 
        {
            $pageController->register();
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