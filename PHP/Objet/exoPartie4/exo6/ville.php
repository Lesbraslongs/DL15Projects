<?php
require_once("formatage.php");

class Ville implements Formatage {

	private $_cp;
	private $_ville;

	public function __construct($cp,$ville) {
		$this->_cp = $this->formatageNombre($cp);
		$this->_ville = $this->formatageChaine($ville);
	}

	public function infosVille() {

		return " Code Postal : " . $this->_cp . " - Ville : " . $this->_ville;
	}

	public function formatageChaine($chaine) {

		return ucwords($chaine);
	}

	public function formatageNombre($nombre) {

		return number_format($nombre, 0, "", " ");
	}
}
?>