<?php

namespace  NGADEYNE\Photography_Package\Controller;
use NGADEYNE\Photography_Package\Model\AdminDAO;

class ControllerAdmin {
    
    private $admin;

    public function __construct() {
        $this->admin = new AdminDAO();
    }

    public function connection($pseudo, $mdp) {
        // Comparaison du pass envoyé via le formulaire avec la base
        $isPasswordCorrect = $this->admin->connectionAdmin($pseudo, $mdp);
        if ($isPasswordCorrect) {
            $_SESSION['id'] = $this->admin->getId($pseudo);
            $_SESSION['pseudo'] = $pseudo;

            header('Location: admin');
        } else {
            header('Location: loginError');
        }   
    }

    public function disconnection()
    {
        // On détruit les variables de notre session
        session_unset ();
        // On détruit notre session
        session_destroy ();
        // On redirige le visiteur vers la page d'accueil
        header ('location: accueil');
    }

} // Fin de la classe