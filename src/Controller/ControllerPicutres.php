<?php

namespace NGADEYNE\Photography_Package\Controller;
use NGADEYNE\Photography_Package\Model\AdminDAO;
use NGADEYNE\Photography_Package\Model\PicturesDAO;
use NGADEYNE\Photography_Package\Model\Entities\PicturesPortrait;
use NGADEYNE\Photography_Package\Model\Entities\PicturesAnimal;
use NGADEYNE\Photography_Package\Model\Entities\PicturesLandscape;
use NGADEYNE\Photography_Package\Model\Entities\PicturesUrbex;
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

    public function addNewPicsAnimal($titlePicsAnimal, $contentPicsAnimal) {  
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomAnimal = "Contents/Pictures/{$titlePicsAnimal}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomAnimal);
        $linkAnimal = $nomAnimal;
    
        // Save Pictures
        $picture = new PicturesAnimal([ 'link' => $linkAnimal,'title' => $titlePicsAnimal, 'content' => $contentPicsAnimal]);
        if (empty($_SESSION['errors'])) {
            $this->pictures->addNewPicsBDDAnimal($picture);
            if ($results > 0) {
                $_SESSION['confirmations']['Comments'] = "Votre photo a bien été ajouté";
            } else {
                $_SESSION['errors']['BDD'] = "Erreur lors de l'ajout à la base de données";
            }
        }
        header("location: admin");
        exit();
    }

    public function addNewPicsLandscape($titlePicsLandscape, $contentPicsLandscape) {
        
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomLandscape = "Contents/Pictures/{$titlePicsLandscape}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomLandscape);
        $linkLandscape = $nomLandscape;
    
        // Save Pictures
        $picture = new PicturesLandscape([ 'link' => $linkLandscape,'title' => $titlePicsLandscape, 'content' => $contentPicsLandscape]);
        if (empty($_SESSION['errors'])) {
            $this->pictures->addNewPicsBDDLandscape($picture);
            if ($results > 0) {
                $_SESSION['confirmations']['Comments'] = "Votre photo a bien été ajouté";
            } else {
                $_SESSION['errors']['BDD'] = "Erreur lors de l'ajout à la base de données";
            }
        }
        header("location: admin");
        exit();
    }

    public function addNewPicsUrbex($titlePicsUrbex, $contentPicsUrbex) {
        
        if ($_FILES['image']['error'] > 0) $erreur = "Erreur lors du transfert";

        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        //1. strrchr renvoie l'extension avec le point (« . »).
        //2. substr(chaine,1) ignore le premier caractère de chaine.
        //3. strtolower met l'extension en minuscules.
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image']['name'], '.')  ,1)  );
        
        $nomUrbex = "Contents/Pictures/{$titlePicsUrbex}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image']['tmp_name'],$nomUrbex);
        $linkUrbex = $nomUrbex;
    
        // Save Pictures
        $picture = new PicturesUrbex([ 'link' => $linkUrbex,'title' => $titlePicsUrbex, 'content' => $contentPicsUrbex]);
        if (empty($_SESSION['errors'])) {
            $this->pictures->addNewPicsBDDUrbex($picture);
            if ($results > 0) {
                $_SESSION['confirmations']['Comments'] = "Votre photo a bien été ajouté";
            } else {
                $_SESSION['errors']['BDD'] = "Erreur lors de l'ajout à la base de données";
            }
        }
        header("location: admin");
        exit();
    }

    // Delete Pictures
    public function DeletePicsPortrait($idPicsPortrait) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDPortrait($idPicsPortrait);
            header("Location: admin");
        } else {
            header("Location: login");
        }
    }

    // Delete Pictures
    public function DeletePicsAnimal($idPicsAnimal) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDAnimal($idPicsAnimal);
            header("Location: admin");
        } else {
            header("Location: login");
        }
    }

    // Delete Pictures
    public function DeletePicsLandscape($idPicsLandscape) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDLandscape($idPicsLandscape);
            header("Location: admin");
        } else {
            header("Location: login");
        }
    }

    // Delete Pictures
    public function DeletePicsUrbex($idPicsUrbex) {
        if (isset($_SESSION['pseudo']))
        {
        $this->pictures->DeletePicsBDDUrbex($idPicsUrbex);
            header("Location: admin");
        } else {
            header("Location: login");
        }
    }

} // Fin de la classe