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
		return "Livre dont le titre est ".$this->_titreLivre." qui contient ".$this->_nbreChapitres." chapitres et qui a ".$this->_nbrePages." pages.";
	}

	public function setNbrePages($leNbreDePages) {
	// permet d'indiquer le nombre de pages grâce à l'élément $leNbreDePages
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
	// retourne le nombre de chapitres de l'objet courant
	}

	public function getTitreLivre() {
	// retourne le titre du livre de l'objet courant
	}

	public function setTitreLivre($leTitreDuLivre) {
	// permet d'indiquer le titre du livre grâce à l'élément $leTitreDuLivre
	}
}

?>