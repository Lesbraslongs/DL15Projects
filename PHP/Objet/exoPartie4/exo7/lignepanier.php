<?php
require_once("article.php");

class LignePanier {
	private $_qte;
	private $_prix;
	private $_article;

	function __construct(Article $article,$qte) {
		$this->setArticle($article);
		$this->setQte($qte);
	}

    public function getQte()
    {
        return $this->_qte;
    }

    public function setQte($qte)
    {
        $this->_qte = $qte;

        return $this;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;

        return $this;
    }

    public function getArticle()
    {
        return $this->_article;
    }

    public function setArticle($article)
    {
        $this->_article = $article;

        return $this;
    }
}
?>