<?php
abstract class Article {
	protected $_reference;
	protected $_marque;
	protected $_prixUnitaire;
	protected $_qteStock;

	public function __construct($reference,$marque,$prixUnitaire,$qteStock) {
		$this->setReference($reference);
		$this->setMarque($marque);
		$this->setPrixUnitaire($prixUnitaire);
		$this->setQteStock($qteStock);
	}

    public function getReference()
    {
        return $this->_reference;
    }

    public function setReference($reference)
    {
        $this->_reference = $reference;

        return $this;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;

        return $this;
    }

    public function getPrixUnitaire()
    {
        return $this->_prixUnitaire;
    }

    public function setPrixUnitaire($prixUnitaire)
    {
        $this->_prixUnitaire = $prixUnitaire;

        return $this;
    }

    public function getQteStock()
    {
        return $this->_qteStock;
    }

    public function setQteStock($qteStock)
    {
        $this->_qteStock = $qteStock;

        return $this;
    }

    public function entrerStock ($qte) {

    	$this->_qteStock += $qte;
    }

    public function sortirStock ($qte) {

    	$this->_qteStock -= $qte;
    }
}
?>