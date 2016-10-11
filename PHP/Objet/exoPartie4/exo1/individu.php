<?php

class Individu
{
	private $_prenom;
	private $_nom;
	function __construct($prenom,$nom)
	{
		$this->setPrenom($prenom);
		$this->setNom($nom);
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

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }
}
?>