<?php
require_once("lignepanier.php");
require_once("article.php");

class Panier {

	private $_montant;
	private $_indexLigne;
	private $_lignesPanier=array();

	function __construct() {

	}

	public function getMontant {
		return $this->_montant;
	}

    public function getIndexLigne()
    {
        return $this->_indexLigne;
    }

    public function addLigne (Article $article,$qte) {
    	foreach ($_lignesPanier as $key => $value) {
    		$this->_lignesPanier[$article]=$qte;
    	}
    	//$this->_lignesPanier[]=$article;
    }

    public function updateLigne ($index,$newQte) {
    	$this->_lignesPanier[$index]=$newQte;
    }
}
?>