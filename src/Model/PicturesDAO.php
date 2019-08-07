<?php 

namespace NGADEYNE\Photography_Package\Model;

use NGADEYNE\Photography_Package\Model\Model;
use NGADEYNE\Photography_Package\Model\Entities\PicturesPortrait;

class PicturesDAO extends Model {

    public function addNewPicsBDDPortrait($picture) {
        $sql='insert into T_PICTURES_PORTRAIT(link, title, content)'
        . 'values(?, ?, ?)';
        $results=$this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }
}

// Fin de la classe