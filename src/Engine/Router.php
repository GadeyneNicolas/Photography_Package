<?php

namespace NGADEYNE\Photography_Package\Engine;
use  NGADEYNE\Photography_Package\Controller\ControllerPage;
use  NGADEYNE\Photography_Package\Controller\ControllerMail;
use  NGADEYNE\Photography_Package\Controller\ControllerAdmin;
use  NGADEYNE\Photography_Package\Controller\ControllerPictures;
use Exception;

class Router {

    private $ctrlPage;
    private $ctrlMail;
    private $ctrlAdmin;
    private $ctrlPictures;

    public function __construct() {
        $this->ctrlPage = new ControllerPage();
        $this->ctrlMail = new ControllerMail();
        $this->ctrlAdmin = new ControllerAdmin();
        $this->ctrlPictures = new ControllerPictures();
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
                }   else if (($_GET['action'] == 'Send')) {
                    $this->ctrlPage->send();
                }   else if (($_GET['action'] == 'Mentions')) {
                    $this->ctrlPage->mentions();
                }   else if (($_GET['action'] == 'Confidential')) {
                    $this->ctrlPage->confidential();
                }    else if (($_GET['action'] == 'Login')) {
                    $this->ctrlPage->login();
                }   else if ($_GET['action'] == 'Connection') {
                    $pseudo = $this->getParameter($_POST, 'pseudo');
                    $mdp = $this->getParameter($_POST, 'mot_de_passe');
                    $this->ctrlAdmin->connection($pseudo, $mdp);
                }   else if (($_GET['action'] == 'Disconnection')) {
                    $this->ctrlAdmin->disconnection();
                }   else if (($_GET['action'] == 'LoginError')) {
                    $this->ctrlPage->loginError();
                }   else if (($_GET['action'] == 'Admin')) {
                    $this->ctrlPage->admin();
                }   else if (($_GET['action'] == 'AddPictures')) {
                    $this->ctrlPage->addPictures();
                }   else if ($_GET['action'] == 'AddNewPicsPortrait') {
                    $titlePicsPortrait = $this->getParameter($_POST, 'title');
                    $contentPicsPortrait = $this->getParameter($_POST, 'content');
                    $this->ctrlPictures->AddNewPicsPortrait($titlePicsPortrait, $contentPicsPortrait);
                }   else if ($_GET['action'] == 'Mail') {
                    $prenomContact = $this->getParameter($_POST, 'prenom');
                    $nomContact = $this->getParameter($_POST, 'nom');
                    $dateContact = $this->getParameter($_POST, 'date');
                    $servicesContact = $this->getParameter($_POST, 'services');
                    $emailContact = $this->getParameter($_POST, 'email');
                    $contentContact = $this->getParameter($_POST, 'content');
                    $this->ctrlMail->mailto($prenomContact, $nomContact, $dateContact, $servicesContact, $emailContact, $contentContact); 
                } else {
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