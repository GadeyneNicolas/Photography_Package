<?php

namespace NGADEYNE\Photography_Package\Engine;
use NGADEYNE\Photography_Package\Controller\ControllerPage;
use Exception;

class Router {

    private $ctrlPage;

    public function __construct() {
        $this->ctrlPage = new ControllerPage();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequest() {
        try {
            if (isset($_GET['action'])) {
                
                if (($_GET['action'] == 'About')) {
                    $this->ctrlPage->about();
                }   else if (($_GET['action'] == 'Portfolio')) {
                    $this->ctrlPage->portfolio();
                }   else if (($_GET['action'] == 'Portrait')) {
                    $this->ctrlPage->portrait();
                }   else if (($_GET['action'] == 'Animal')) {
                    $this->ctrlPage->animal();
                }   else if (($_GET['action'] == 'Landscape')) {
                    $this->ctrlPage->landscape();
                }   else if (($_GET['action'] == 'Urbex')) {
                    $this->ctrlPage->urbex();
                }   else if (($_GET['action'] == 'Services')) {
                    $this->ctrlPage->services();
                }   else if (($_GET['action'] == 'Contact')) {
                    $this->ctrlPage->contact();
                }   else if (($_GET['action'] == 'Mentions')) {
                    $this->ctrlPage->mentions();
                }   else if (($_GET['action'] == 'Confidential')) {
                    $this->ctrlPage->confidential();
                }   else if (($_GET['action'] == 'Admin')) {
                    $this->ctrlPage->admin();
                }   else {
                    throw new Exception("Action non valide");
                    $this->ctrlPage->error();
                }
                                
            } else {  // aucune action définie : affichage de l'accueil
                $this->ctrlPage->home();
            }
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
    }

    // Affiche une erreur
    private function error() {
        $view = new View("Error");
        $view->generate([]);
    }

    // Recherche un paramètre dans un tableau
    private function getParameter($array, $name) {
        if (isset($array[$name])) {
            return $array[$name];
        }
        else
            throw new Exception("Paramètre '$name' absent");
    }
} // Fin de la classe