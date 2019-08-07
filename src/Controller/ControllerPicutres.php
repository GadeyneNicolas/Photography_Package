<?php

namespace NGADEYNE\Photography_Package\Controller;
use NGADEYNE\Photography_Package\Model\AdminDAO;
use NGADEYNE\Photography_Package\Model\PicturesDAO;
use NGADEYNE\Photography_Package\Model\Entities\PicturesPortrait;
use NGADEYNE\Photography_Package\Engine\View;

class ControllerPictures {
    private $admin;
    private $pictures;

    public function __construct() {
        $this->admin = new AdminDAO();
        $this->pictures = new PicturesDAO();
    }

    public function addNewPicsPortrait($titlePicsPortrait, $contentPicsPortrait) {
        
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomPortrait = "Contents/Pictures/{$titlePicsPortrait}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomPortrait);
        $linkPortrait = $nomPortrait;

        // Save Pictures
        $picture = new PicturesPortrait([ 'link' => $linkPortrait,'title' => $titlePicsPortrait, 'content' => $contentPicsPortrait]);
        if (empty($_SESSION['errors'])) {
            $this->pictures->addNewPicsBDDPortrait($picture);
            if ($results > 0) {
                $_SESSION['confirmations']['Comments'] = "Votre photo a bien été ajouté";
            } else {
                $_SESSION['errors']['BDD'] = "Erreur lors de l'ajout à la base de données";
            }
        }
        header("location: admin");
        exit();
    }
} // Fin de la classe