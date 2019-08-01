<?php

namespace  NGADEYNE\Photography_Package\Controller;

class ControllerMail {

    public function mailto($prenomContact, $nomContact, $dateContact, $servicesContact, $emailContact, $contentContact)
    {
    	$error = false; 
        if(strlen($emailContact) >= 10){
            $mail = filter_var($emailContact, FILTER_VALIDATE_EMAIL);
            if(!$mail){
            	$error = true;
	            echo "Il y a une erreur dans votre adresse mail, veuillez réessayer s'il vous plait.";
            }
		} else {
        	$error = true;
            echo "Il y a une erreur dans votre adresse mail, veuillez réessayer s'il vous plait.";
        }

        if(strlen($prenomContact) < 3){
            $error = true; 
            echo "Il y a une erreur dans votre pseudo, veuillez réessayer s'il vous plait.";
        }

        if(strlen($nomContact) < 3){
            $error = true; 
            echo "Il y a une erreur dans votre pseudo, veuillez réessayer s'il vous plait.";
        }

        if(strlen($servicesContact) < 3){
            $error = true; 
            echo "Il y a une erreur dans votre pseudo, veuillez réessayer s'il vous plait.";
        }

        if(strlen($contentContact) < 15){
	        echo "Il y a une erreur dans votre message, veuillez réessayer s'il vous plait.";
	        $error = true;
        } 
        
		if(!$error){
			$header  = 'MIME-Version: 1.0' . "\r\n";
			$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$header .= 'From: ' . $emailContact . "\r\n";

			$message = '<h1>Message envoyé depuis la page Contact de photographie.nicolas-gadeyne.fr</h1>
            <p><b>Prénom : </b>' . $prenomContact . '<br>
            <b>Nom : </b>' . $nomContact . '<br>
            <b>Date : </b>' . $dateContact . '<br>
            <b>Préstation : </b>' . $servicesContact . '<br>
            <b>Email : </b>' . $emailContact . '<br>
            <b>Message : </b>' . $contentContact . '</p>';

			$return = mail('ngadeyne@gmail.com', 'Envoi depuis page Contact', $message, $header);
			if($return) {
				header('location: send');
			} else {
                header('location: error');
			}
		}
    }
}  // Fin de la classe