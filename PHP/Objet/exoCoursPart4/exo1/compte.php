<?php
require_once("personne.php");
class Compte {
	private $_numCompte;
	private $_proprietaire;
	private $_solde;
	public function __construct($numCpt,$proprio,$solde)
	{
		$this->_setNumCompte($numCpt);
		$this->_setProprietaire($proprio);
		$this->_setSolde($solde);
	}

	public function getInfos() {
		return "Num Compte : " . $this->getNumCompte() . " Propriétaire : " . $this->getProprietaire()->infos() . " Solde : " . $this->getSolde();
	}

    public function getNumCompte()
    {
        return $this->_numCompte;
    }

    public function _setNumCompte($numCompte)
    {
        $this->_numCompte = $numCompte;

        return $this;
    }

    public function getProprietaire()
    {
        return $this->_proprietaire;
    }

    public function _setProprietaire($proprietaire)
    {
        $this->_proprietaire = $proprietaire;

        return $this;
    }

    public function getSolde()
    {
        return $this->_solde;
    }

    public function _setSolde($solde)
    {
        $this->_solde = $solde;

        return $this;
    }
}

?>