<?php

require_once("individu.php");
class Livre {
private $_nbrePages; //création de l'attribut privé $_nbrePages
private $_nbreChapitres; //création de l'attribut privé $_nbreChapitres
private $_titreLivre; //création de l'attribut privé $_titreLivre
private $_auteur ;//création de l'attribut privé $_auteur de type Individu

 //création du constructeur avec ses attributs
public function __construct($leNbrePages,$leNbreChapitres,$leTitreLivre,$leAuteur){
$this->_nbrePages = $leNbrePages; // initialisation de l'attribut _nbrePages avec le paramêtre leNbrePages

$this->_nbreChapitres = $leNbreChapitres; // l'attribut _nbreChapitres de l'objet prend pour valeur le contenu de la variable leNbreChapitres

$this->_titreLivre = $leTitreLivre; // valeur de l'attribut _titreLivre de l'objet prend le contenu de la variable leTitreLivre

$this->_auteur = $leAuteur; // valeur de l'attribut auteur de l'objet prend pour valeur le contenu de la variable $leAuteur
}

// création de la méthode infosLivre() pour la class Livre
public function infosLivre() {
return 'Livre dont le titre est '.$this->_titreLivre.' qui contient '.$this
->_nbreChapitres.' chapitres et qui a '.$this->_nbrePages.' pages et qui a pour auteur'.$this->_auteur->getPrenom().' '.$this->_auteur->getNom();
}

public function setNbrePages($leNbreDePages){
	$this->_nbrePages=$leNbreDePages ;
}

public function getNbrePages(){
// retourne le nombre de pages de l'objet courant
	return $this->_nbrePages;
}

public function setNbreChapitres($leNbreDeChapitres){
// permet d'indiquer le nombre de chapitre grâce à l'élément $leNbreDeChapitres
	$this->_nbreChapitres=$leNbreDeChapitres;
}

public function getNbreChapitres(){
	return $this->_nbreChapitres ;
}

public function getTitreLivre(){
	return $this->_titreLivre;
}

public function setTitreLivre($leTitreDuLivre){
	$this->_titreLivre=$leTitreDuLivre;
}

public function getAuteur(){
	return $this->_auteur;
}

public function setAuteur($lauteur){
	$this->_auteur=$lauteur;
}
}

?>