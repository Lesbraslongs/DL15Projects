<?php
//création de la classe
class Stylo {
	private $_couleur; //création de l'attribut privé couleur
	private $_numeroSerie; //création de l'attribut privé numéro de série

	// constructeur du stylo
	public function __construct($laCouleur) {
		$this->_couleur = "$laCouleur"; //met le stylo à bleu par défaut
		/*indique la date jour +  n° aléatoire pour le numéro de série du stylo */
		$this->_numeroSerie =date("Ymd").rand();
	}

	//affiche les informations sur le stylo
	public function infosStylo() {
		return 'Stylo n&deg;'.$this->_numeroSerie.' de couleur '. $this->_couleur;
	}
}