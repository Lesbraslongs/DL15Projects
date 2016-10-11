<?php
require_once("miniexcursion.php");

class MiniExcursionPlanifiee {

	private $_heureDepart;
	private $_nbreInscrits;
	private $_laMiniExcursion;
	public function __construct($heureDepart, $nbreInscrits, $laMiniExcursion) {
	// construit la miniExcursionPlanifiee avec les éléments en paramètre
		$this->_heureDepart=$heureDepart;
		$this->_nbreInscrits=$nbreInscrits;
		$this->_laMiniExcursion=$laMiniExcursion;
	}
	public function estComplete()
	{
	//retourne vrai si le nombre d'inscrit est égal au nombre de places prévues dans la mini excursion
	$complet=false;
	if ($this->_laMiniExcursion->getNbrePlaces()==$this->_nbreInscrits) {
		$complet=true;
	}
	return $complet;

	}

    public function getHeureDepart()
    {
        return $this->_heureDepart;
    }

    public function setHeureDepart($heureDepart)
    {
        $this->_heureDepart = $heureDepart;

        return $this;
    }

    public function getNbreInscrits()
    {
        return $this->_nbreInscrits;
    }

    public function setNbreInscrits($nbreInscrits)
    {
        $this->_nbreInscrits = $nbreInscrits;

        return $this;
    }

    public function getLaMiniExcursion()
    {
        return $this->_laMiniExcursion;
    }

    public function setLaMiniExcursion($laMiniExcursion)
    {
        $this->_laMiniExcursion = $laMiniExcursion;

        return $this;
    }
}
?>

