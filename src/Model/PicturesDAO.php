<?php 

namespace NGADEYNE\Photography_Package\Model;

use NGADEYNE\Photography_Package\Model\Model;
use NGADEYNE\Photography_Package\Model\Entities\PicturesPortrait;
use NGADEYNE\Photography_Package\Model\Entities\PicturesAnimal;
use NGADEYNE\Photography_Package\Model\Entities\PicturesLandscape;
use NGADEYNE\Photography_Package\Model\Entities\PicturesUrbex;

class PicturesDAO extends Model {

    public function addNewPicsBDDPortrait($picture) {
        $sql='insert into T_PICTURES_PORTRAIT(link, title, content)'
        . 'values(?, ?, ?)';
        $results=$this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function addNewPicsBDDAnimal($picture) {
        $sql='insert into T_PICTURES_ANIMAL(link, title, content)'
        . 'values(?, ?, ?)';
        $results=$this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function addNewPicsBDDLandscape($picture) {
        $sql='insert into T_PICTURES_LANDSCAPE(link, title, content)'
        . 'values(?, ?, ?)';
        $results=$this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function addNewPicsBDDUrbex($picture) {
        $sql='insert into T_PICTURES_URBEX(link, title, content)'
        . 'values(?, ?, ?)';
        $results=$this->executeRequest($sql, array($picture->getLink(), $picture->getTitle(), $picture->getContent()));
        return $results;
    }

    public function getPicsBDDPortrait() {
        $arrayPortrait=[];
        $sql='select id,'
        . ' title, link, content from T_PICTURES_PORTRAIT'
        . ' order by id desc';
        $picturesPortrait=$this->executeRequest($sql);

        foreach ($picturesPortrait as $picturePortrait) {
            $objectPortrait=new PicturesPortrait($picturePortrait);

            array_push($arrayPortrait, $objectPortrait);
        }

        return $arrayPortrait;
    }

    public function getPicsBDDAnimal() {
        $arrayAnimal=[];
        $sql='select id,'
        . ' title, link, content from T_PICTURES_ANIMAL'
        . ' order by id desc';
        $picturesAnimal=$this->executeRequest($sql);

        foreach ($picturesAnimal as $pictureAnimal) {
            $objectAnimal=new PicturesAnimal($pictureAnimal);

            array_push($arrayAnimal, $objectAnimal);
        }

        return $arrayAnimal;
    }

    public function getPicsBDDLandscape() {
        $arrayLandscape=[];
        $sql='select id,'
        . ' title, link, content from T_PICTURES_LANDSCAPE'
        . ' order by id desc';
        $picturesLandscape=$this->executeRequest($sql);

        foreach ($picturesLandscape as $pictureLandscape) {
            $objectLandscape=new PicturesLandscape($pictureLandscape);

            array_push($arrayLandscape, $objectLandscape);
        }

        return $arrayLandscape;
    }

    public function getPicsBDDUrbex() {
        $arrayUrbex=[];
        $sql='select id,'
        . ' title, link, content from T_PICTURES_Urbex'
        . ' order by id desc';
        $picturesUrbex=$this->executeRequest($sql);

        foreach ($picturesUrbex as $pictureUrbex) {
            $objectUrbex=new PicturesUrbex($pictureUrbex);

            array_push($arrayUrbex, $objectUrbex);
        }

        return $arrayUrbex;
    }

}

// Fin de la classe