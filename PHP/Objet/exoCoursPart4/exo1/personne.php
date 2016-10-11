<?php

class Personne {
	private $_nom;
	private $_prenom;
	private $_dateDeNaissance;
	public function __construct($nom,$prenom,$ddn)
	{
		$this->_setNom($nom);
		$this->_setPrenom($prenom);
		$this->_setDateDeNaissance($ddn);
	}

	public function infos() {
		return "Nom : " . $this->getNom() . " Prenom : " . $this->getPrenom() . " Ddn : " . $this->getDateDeNaissance();
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

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function _setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function _setDateDeNaissance($dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;

        return $this;
    }
}

?>