<?php



    
    
    public function EspacePerso(): void {
        $route = "connexion";
        require 'templates/layout.phtml';
        
    }

    public function notFound(): void {
        $route = "404";
        require 'templates/layout.phtml';
    }
    
    
}


?>