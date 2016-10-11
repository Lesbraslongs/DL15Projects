<?php

class Individu
{
	private $_nom;
	private $_prenom;

	public function __construct($nom,$prenom)
	{
		$this->_nom = $nom;
		$this->_prenom = $prenom;
	}

    public function infos() {
        return "<br>Nom : " . $this->getNom() . "<br>"
        . "Prenom : " . $this->getPrenom() ;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }
}
?>