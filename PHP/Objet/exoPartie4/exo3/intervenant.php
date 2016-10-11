<?php

class Intervenant {

	private $_nom;
	private $_tauxH;

	public function __construct($nom,$tauxH)
	{
		$this->setNom($nom);
		$this->setTauxH($tauxH);
	}

	public function infos() {
		return "Nom : " . $this->_nom . "Taux Horaire : " . $this->_tauxH;
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

    public function getTauxH()
    {
        return $this->_tauxH;
    }

    public function setTauxH($tauxH)
    {
        $this->_tauxH = $tauxH;

        return $this;
    }
}