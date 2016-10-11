<?php
//création de la classe
class Livre {

	private $_nbrePages; //création de l'attribut privé $_nbrePages
	private $_nbreChapitres; //création de l'attribut privé $_nbreChapitres
	private $_titreLivre; //création de l'attribut privé $_titreLivre

	//création du constructeur avec ses attributs
	public function __construct($leNbrePages,$leNbreChapitres,$leTitreLivre) {

		$this->_nbrePages = $leNbrePages; // initialisation de l'attribut _nbrePages avec le paramêtre leNbrePages
		$this->_nbreChapitres =$leNbreChapitres; // l'attribut _nbreChapitres de l'objet prend pour valeur le contenu de la variable leNbreChapitres
		$this->_titreLivre =$leTitreLivre; // valeur de l'attribut _titreLivre de l'objet prend pour valeur le contenu de la variable $leTitreLivre
	}

	// création de la méthode infosLivre() pour la class Livre
	public function infosLivre() {
		return "<br/>Livre dont le titre est ".$this->_titreLivre." qui contient ".$this->_nbreChapitres." chapitres et qui a ".$this->_nbrePages." pages.";
	}

	public function setNbrePages($leNbreDePages) {
		return $this->_nbrePages=$leNbreDePages;
	}

	public function getNbrePages() {
	// retourne le nombre de pages de l'objet courant
		return $this->_nbrePages;
	}

	public function setNbreChapitres($leNbreDeChapitres) {
	// permet d'indiquer le nombre de chapitre grâce à l'élément $leNbreDeChapitres
		$this->_nbreChapitres=$leNbreDeChapitres ;
	}

	public function getNbreChapitres() {
		return $this->_nbreChapitres;
	}

	public function getTitreLivre() {
		return $this->_titreLivre;
	}

	public function setTitreLivre($leTitreDuLivre) {
		$this->_titreLivre=$leTitreDuLivre;
	}
}

?>