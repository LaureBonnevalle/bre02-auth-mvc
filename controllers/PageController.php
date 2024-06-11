<?php

class PageController {
    
    public function __construct(){} 

    
    
    public function EspacePerso(): void {
        $template = "connexion";
        require 'templates/layout.phtml';
        
    }

    public function notFound(): void {
        $template = "404";
        require 'templates/layout.phtml';
    }
    public function home(): void {
        $template = "home";
        require 'templates/layout.phtml';
        
    }
    
    
}


?>