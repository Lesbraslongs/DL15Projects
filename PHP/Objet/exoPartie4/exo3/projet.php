<?php
require_once("mission.php");
require_once("intervenant.php");
class Projet {

	private $_nom;
	private $_debut;
	private $_fin;
	private $_pxFact;
	private $_missions;

	public function __construct($nom,$debut,$fin,$pxFact,$missions)
	{
		$this->setNom($nom);
		$this->setDebut($debut);
		$this->setFin($fin);
		$this->setPxFact($pxFact);
		$this->setMissions($missions);
	}
	public function cumulCoutMo()
	{
	// calcul le cumul du coût en fonction de chacune des mission et du taux horaire de l'intervenant de la mission
	//pour chaque mission = taux horaire intervenant * nbheuremission
	//retourne le cumul du coût
		$somme=0;
		foreach ($this->_missions as $value) {
				$somme += $value->getExecutant() * $value->nbHeuresEffectues();
		}
		return $somme;
		/*return ($this->getMissions()->getExecutant())*($this->getMissions()->getNbHPrev());*/
	}
	public function margeBruteCourante()
	{
	// retourne le prix facture du projet (variable) - le cumul du coût des missions (méthode)
	// le prix facture est une variable de la classe alors que le coût des missions est une méthode
	// de la classe
	return $this->getPxFact() - $this->cumulCoutMo();
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

    public function getDebut()
    {
        return $this->_debut;
    }

    public function setDebut($debut)
    {
        $this->_debut = $debut;

        return $this;
    }

    public function getFin()
    {
        return $this->_fin;
    }

    public function setFin($fin)
    {
        $this->_fin = $fin;

        return $this;
    }

    public function getPxFact()
    {
        return $this->_pxFact;
    }

    public function setPxFact($pxFact)
    {
        $this->_pxFact = $pxFact;

        return $this;
    }

    public function getMissions()
    {
    	foreach ($this->_missions as $key => $value) {
    		return $value;
    	}

    }

    public function setMissions($missions)
    {
        $this->_missions = $missions;

        return $this;
    }
}