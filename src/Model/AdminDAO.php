<?php

namespace NGADEYNE\Photography_Package\Model;
use NGADEYNE\Photography_Package\Model\Model;

class AdminDAO extends Model {

    public function connectionAdmin($pseudo, $mdp)
    {
        $sql = 'SELECT password FROM T_ADMIN WHERE pseudo = :pseudo';
        $requete = $this->executeRequest($sql, array('pseudo' => $pseudo));
        $hash = $requete->fetch()['password'];

        return password_verify($mdp, $hash);
    }

    public function getId($pseudo)
    {
        $sql = 'SELECT id FROM T_ADMIN WHERE pseudo = :pseudo';
        $requete = $this->executeRequest($sql, array('pseudo' => $pseudo));
    }
} // Fin de la classe