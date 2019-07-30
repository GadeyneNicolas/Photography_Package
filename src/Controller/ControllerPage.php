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

    public function about() {
        $view = new View("About");
        $view->generate([]);
    }

    public function portfolio() {
        $view = new View("Portfolio");
        $view->generate([]);
    }

    public function services() {
        $view = new View("Services");
        $view->generate([]);
    }

    public function contact() {
        $view = new View("Contact");
        $view->generate([]);
    }

    public function admin() {
        $view = new View("Admin");
        $view->generate([]);
    }
} // Fin de la classe
