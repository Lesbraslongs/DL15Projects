<?php
/**
*
*/
class Individu{
	private $_nom;
	private $_prenom;
	function __construct($prenom,$nom) {
		$this->_nom=$nom;
		$this->_prenom=$prenom;
	}

	public function infosIndividu() {
		return "L'individu à pour prenom ".$this->_prenom." et ".$this->_nom." pour nom.";
	}
}
?>