<?php
// --- Eleve.php
require_once("personneA.php");
class eleve extends personneA {
	private $classe;
	public function __construct($prenom, $nom, $classe) {
		$this->_classe = $classe;
		parent::__construct($prenom, $nom);
	}
	public function getClasse() {
		return $this->_classe;
	}
	public function getInfos() {
		return "Prénom =".$this->_prenom." Nom=".$this->_nom." Classe=".$this->_classe;
	}
}
?>