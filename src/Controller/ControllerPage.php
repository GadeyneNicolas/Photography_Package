<?php

namespace NGADEYNE\Photography_Package\Controller;
use NGADEYNE\Photography_Package\Model\PicturesDAO;
use NGADEYNE\Photography_Package\Engine\View;

class ControllerPage {
    private $pictures;

    public function __construct() {
        $this->pictures = new PicturesDAO();
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
        $picturesPortrait =  $this->pictures->getPicsBDDPortrait();
        $view = new View("Portrait");
        $view->generate(array('picturesPortrait' => $picturesPortrait));
    }

    public function animal() {
        $picturesAnimal =  $this->pictures->getPicsBDDAnimal();
        $view = new View("Animal");
        $view->generate(array('picturesAnimal' => $picturesAnimal));
    }

    public function landscape() {
        $picturesLandscape =  $this->pictures->getPicsBDDLandscape();
        $view = new View("Landscape");
        $view->generate(array('picturesLandscape' => $picturesLandscape));
    }

    public function urbex() {
        $picturesUrbex =  $this->pictures->getPicsBDDUrbex();
        $view = new View("Urbex");
        $view->generate(array('picturesUrbex' => $picturesUrbex));
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
        $picturesPortrait =  $this->pictures->getPicsBDDPortrait();
        $picturesAnimal =  $this->pictures->getPicsBDDAnimal();
        $picturesLandscape =  $this->pictures->getPicsBDDLandscape();
        $picturesUrbex =  $this->pictures->getPicsBDDUrbex();
        $view = new View("Admin");
        $view->generate(array('picturesUrbex' => $picturesUrbex, 'picturesPortrait' => $picturesPortrait, 'picturesAnimal' => $picturesAnimal, 'picturesLandscape' => $picturesLandscape));
    }

    public function addPictures() {
        $view = new View("AddPictures");
        $view->generate([]);
    }
} // Fin de la classe
