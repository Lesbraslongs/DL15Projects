<?php

abstract class artiste
{
	protected $_nom;
	protected $_prenom;
	public function __construct($prenom,$nom)
	{
		$this->_nom=$nom;
		$this->_prenom=$prenom;
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