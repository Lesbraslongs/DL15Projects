<?php
 //création de la classe
class Livre {
	private $_nbrePages; //création de l'attribut privé nbrePages
	private $_nbreChapitres; //création de l'attribut privé nbreChapitres
	private $_titreLivre; //création de l'attribut privé titreLivre
	public function __construct($nbPages,$nbChapitres,$titreLivre) //
	{
		$this->_nbrePages=$nbPages; //indique nbPages du Livre
		$this->_nbreChapitres=$nbChapitres; //indique nbChap du Livre
		$this->_titreLivre=$titreLivre; //indique nom du Livre
	}
	public function infosLivre() //affiche infos sur le Livre
	{
		return 'Livre dont le titre est '.$this->_titreLivre.' qui contient '.
		$this->_nbreChapitres.' chapitres et qui a '.$this->_nbrePages.' pages.';
	}
}
?>