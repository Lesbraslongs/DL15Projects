<?php
require_once("article.php");

class Clavier extends Article {
	private $_couleur;

	function __construct ($reference,$marque,$prixUnitaire,$qteStock,$couleur) {
		parent::__construct($reference,$marque,$prixUnitaire,$qteStock);
		$this->setCouleur($couleur);
	}

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function _setCouleur($couleur)
    {
        $this->_couleur = $couleur;

        return $this;
    }
}
?>