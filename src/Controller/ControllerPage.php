<?php

namespace NGADEYNE\Photography_Package\Controller;
use NGADEYNE\Photography_Package\Engine\View;

class ControllerPage {
 

    public function __construct() {
    
    }

// Affiche la liste de tous les billets du blog
    public function home() {
        $view = new View("Home");
        $view->generate([]);
    }
} // Fin de la classe
