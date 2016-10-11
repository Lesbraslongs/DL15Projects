<?php

require_once("individu.php");
class Voiture
{
	private $_numSerie;
	private $_immat;
	private $_marque;
	private $_couleur;
	private $_annee;
	private $_proprietaire;
	public function __construct($numSerie,$immat,$marque,$couleur,$annee,Individu $proprio)
	{
		$this->_numSerie=$numSerie;
		$this->_immat=$immat;
		$this->_marque=$marque;
		$this->_couleur=$couleur;
		$this->_annee=$annee;
		$this->_proprietaire=$proprio;
	}

	public function getInfos() {
		return "numero Serie : ".$this->_numSerie. "<br>"
		."immatriculation : " . $this->_immat . "<br>"
		. "marque : " . $this->_marque . "<br>"
		. "couleur : " .$this->_couleur . "<br>"
		. "année : " . $this->_annee . "<br>"
		. "Proprio : " . $this->getProprietaire()->infos();
	}

    public function getNumSerie()
    {
        return $this->_numSerie;
    }

    private function setNumSerie($numSerie)
    {
        $this->_numSerie = $numSerie;

        return $this;
    }

    public function getImmat()
    {
        return $this->_immat;
    }

    private function setImmat($immat)
    {
        $this->_immat = $immat;

        return $this;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    private function setMarque($marque)
    {
        $this->_marque = $marque;

        return $this;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    private function setCouleur($couleur)
    {
        $this->_couleur = $couleur;

        return $this;
    }

    public function getAnnee()
    {
        return $this->_annee;
    }

    private function setAnnee($annee)
    {
        $this->_annee = $annee;

        return $this;
    }

    public function getProprietaire()
    {
        return $this->_proprietaire;
    }

    private function setProprietaire($proprietaire)
    {
        $this->_proprietaire = $proprietaire;

        return $this;
    }
}
?>