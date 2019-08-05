<?php

namespace NGADEYNE\Photography_Package\Model;
use PDO;

abstract class Model {
    private $bdd;

    protected function executeRequest($sql, $params = null) {
        if ($params == null) {
            $result = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $result = $this->getBdd()->prepare($sql);  // requête préparée
            $result->execute($params);
        }
        return $result;
    }

    private function getBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO('mysql:host=localhost;dbname=pf;charset=utf8',
            'root', '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
        return $this->bdd;
    }
} // Fin de la classe
