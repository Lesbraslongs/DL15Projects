<?php

require_once "src/Model/Model.php";

class HerosDTO {

/**********************************Les Variables***************************************/
    private $id;
    private $nom;
    private $pouvoir;
    private $typePerso;
    private $vie = 100;
    private $atk = 20;

    /**********************************Getter et Setter****************************/
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPouvoir() {
        return $this->pouvoir;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPouvoir($pouvoir) {
        $this->pouvoir = $pouvoir;
    }
    
    function getTypePerso() {
        return $this->typePerso;
    }

    function setTypePerso($typePerso) {
        $this->typePerso = $typePerso;
    }
    
    function getVie() {
        return $this->vie;
    }

    function getAtk() {
        return $this->atk;
    }

    function setVie($vie) {
        $this->vie = $vie;
    }

    function setAtk($atk) {
        $this->atk = $atk;
    }






}
