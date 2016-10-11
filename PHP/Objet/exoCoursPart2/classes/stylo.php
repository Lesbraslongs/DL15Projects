<?php
//création de la classe
class Stylo {
	private $_couleur; //création de l'attribut privé couleur
	private $_numeroSerie; //création de l'attribut privé numéro de série
	private static $_nbreStylo=0;

	// constructeur du stylo
	public function __construct($laCouleur) {
		$this->_couleur = "$laCouleur"; //met le stylo à bleu par défaut
		self::$_nbreStylo=self::$_nbreStylo+1;
		/*indique la date jour +  n° aléatoire pour le numéro de série du stylo */
		$this->_numeroSerie =self::$_nbreStylo;
	}
	 //affiche le nombre de stylo de la classe
	public static function getNbreStylo() {
		return self::$_nbreStylo;
	}

	//affiche les informations sur le stylo
	public function infosStylo() {
		return "il y a ".Stylo::getNbreStylo()." stylos de cr&eacute;&eacute;s<br/>";
	}
}