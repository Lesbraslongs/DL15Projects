<?php

class personne {

    private $_nom;
    private $_dateEmbauche;
    private $_employeur ;
    function __construct($nom,$dateEmb,$employeur)
    {
        $this->_setNom($nom);
        $this->_setDateEmbauche($dateEmb);
        $this->_setEmployeur($employeur);
    }

    public function estEmbauche ($nomEntp,$dateEmb) {
        $this->_employeur=$nomEntp;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function _setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function _setDateEmbauche($dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;

        return $this;
    }

    public function getEmployeur()
    {
        return $this->_employeur;
    }

    public function _setEmployeur($employeur)
    {
        $this->_employeur = $employeur;

        return $this;
    }
}
?>