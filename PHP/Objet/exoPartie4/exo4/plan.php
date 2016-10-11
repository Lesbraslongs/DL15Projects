<?php
require_once("emplacement.php");
class Plan
{
	private $_nomFichier;
	private $_tabEmplacements=array();
	function __construct($nomFichier)
	{
		$this->_nomFichier=$nomFichier;
	}

	public function ajouteEmplacement(Emplacement $emplacement) {
		$this->_tabEmplacements[]=$emplacement;
		// echo "L'emplacement " . $emplacement->affiche() . " a bien été ajouté.";
	}

	public function supprimeEmplacement(Emplacement $emplacement) {
		foreach ($this->_tabEmplacements as $key => $value) {
			unset($this->_tabEmplacements[$key]);
		}

	}

	public function affichePlan () {
		foreach ($this->_tabEmplacements as $key => $value) {
			echo $value->affiche();
		}
	}
}
?>