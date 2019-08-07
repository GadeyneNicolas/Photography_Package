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

    public function portrait() {
        $view = new View("Portrait");
        $view->generate([]);
    }

    public function animal() {
        $view = new View("Animal");
        $view->generate([]);
    }

    public function landscape() {
        $view = new View("Landscape");
        $view->generate([]);
    }

    public function urbex() {
        $view = new View("Urbex");
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

    public function send() {
        $view = new View("Send");
        $view->generate([]);
    }

    public function mentions() {
        $view = new View("Mentions");
        $view->generate([]);
    }

    public function confidential() {
        $view = new View("Confidential");
        $view->generate([]);
    }

    public function login() {
        $view = new View("Login");
        $view->generate([]);
    }

    public function loginError() {
        $view = new View("LoginError");
        $view->generate([]);
    }

    public function admin() {
        $view = new View("Admin");
        $view->generate([]);
    }

    public function addPictures() {
        $view = new View("AddPictures");
        $view->generate([]);
    }
} // Fin de la classe
