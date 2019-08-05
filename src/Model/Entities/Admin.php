<?php

namespace NGADEYNE\Photography_Package\Entities;

class Admin extends Entities {

    private $id;
    private $pseudo;
    private $password;
   
    // Getter
    public function getId()
    {
      return $this->id;
    }
    // Setter
    public function setId()
    {
      $this->id = $id;
    }

    // Getter
    public function getPseudo()
    {
      return htmlspecialchars($this->pseudo);
    }
    // Setter
    public function setPseudo()
    {
        $this->pseudo = $pseudo;
    }

    // Getter
    public function getPassword()
    {
      return htmlspecialchars($this->password);
    }
    // Setter
    public function setPassword()
    {
      $this->password = $password;
    }

} // Fin de la classe