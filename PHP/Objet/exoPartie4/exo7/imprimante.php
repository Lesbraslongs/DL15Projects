<?php
require_once("article.php");

class Imprimante extends Article {
	private $_type;

	function __construct($reference,$marque,$prixUnitaire,$qteStock,$type) {
		parent::__construct($reference,$marque,$prixUnitaire,$qteStock);
		$this->setType($type);
	}

    public function getType()
    {
        return $this->_type;
    }

    public function setType($type)
    {
        $this->_type = $type;

        return $this;
    }
}
?>