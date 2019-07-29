<?php

namespace NGADEYNE\Photography_Package\Engine;

class View {

    // Nom du fichier associé à la vue
    private $file;
    
    // Titre de la vue (défini dans le fichier vue)
    private $title;

    public function __construct($action) {
        // Détermination du nom du fichier vue à partir de l'action
        $this->file = "src/View/Pages/view" . $action . ".php";
    }

    // Génère et affiche la vue
    public function generate($data) {
        // Génération de la partie spécifique de la vue
        $contents = $this->generateFile($this->file, $data);
        // Génération du gabarit commun utilisant la partie spécifique
        $view = $this->generateFile('src/View/Templates/Template.php',
                array('title' => $this->title, 'contents' => $contents));
        // Renvoi de la vue au navigateur
        echo $view;
    }

    // Génère un fichier vue et renvoie le résultat produit
    private function generateFile($file, $data) {
        if (file_exists($file)) {
            // Rend les éléments du tableau $donnees accessibles dans la vue
            extract($data);
            // Démarrage de la temporisation de sortie
            ob_start();
            // Inclut le fichier vue
            // Son résultat est placé dans le tampon de sortie
            require $file;
            // Arrêt de la temporisation et renvoi du tampon de sortie
            return ob_get_clean();
        }
        else {
            throw new Exception("fichier '$file' introuvable");
        }
    }

}