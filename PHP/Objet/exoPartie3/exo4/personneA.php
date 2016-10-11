<?php
// --- PersonneA.php
abstract class personneA {

	protected $_prenom;
	protected $_nom;

	protected function __construct($prenom, $nom) {
		$this->_prenom = $prenom;
		$this->_nom = $nom;
	}

	public abstract function getInfos();// force les filles à redéfinir cette méthode
}
?>