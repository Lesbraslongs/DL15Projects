<?php
require_once("emplacement.php");

class Terrasse extends Emplacement {

	public function __construct($couleur, $xCentre, $yCentre)
	{
	//construit la terrasse à partir des éléments passer en paramètre et à partir de l'appel du //constructeur parent
		parent::__construct($couleur, $xCentre, $yCentre);
	}
	public function affiche()
	{
	// affiche Etalage suivi des valeurs des propriétés de cet élément
	return " Couleur : " . $this->getCouleur() . " Position X : " . $this->getCentre1() . " Position Y : " . $this->getCentre2();

	}
}


?>