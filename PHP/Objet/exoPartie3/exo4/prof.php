<?php
// --- Prof.php
require_once("personneA.php");
class prof extends personneA {
	private $_specialisation;
	public function __construct($prenom, $nom, $specialisation) {
		$this->_specialisation = $specialisation;
		parent::__construct($prenom, $nom);
	}
	public function getSpecialisation() {
		return $this->_specialisation;
	}
	public function getInfos() {
		return "Prénom =".$this->_prenom." Nom=".$this->_nom." Spécialité=".$this->_specialisation;
	}
}
?>