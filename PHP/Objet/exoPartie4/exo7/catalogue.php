<?php
require_once("article.php");

class Catalogue {
	private $_articleAuCatalogue=array();

	function __construct($articleAuCatalogue) {
		$this->setArticleAuCatalogue($articleAuCatalogue);
	}

    public function getArticleAuCatalogue()
    {
        return $this->_articleAuCatalogue;
    }

    public function _setArticleAuCatalogue($articleAuCatalogue)
    {
        $this->_articleAuCatalogue[]= $articleAuCatalogue;

        return $this;
    }
}
?>