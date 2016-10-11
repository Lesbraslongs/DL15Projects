<?php
class Compte {
	protected $_numero;
	protected $_nom;
	protected $_solde;
	public function __construct($unNum,$unNom,$unSolde) {
		$this->_numero=$unNum;
		$this->_nom=$unNom;
		$this->_solde=$unSolde;
	}


    public function getNumero()
    {
        return $this->_numero;
    }

    protected function setNumero($numero)
    {
        $this->_numero = $numero;

        return $this;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    protected function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getSolde()
    {
        return $this->_solde;
    }

    protected function setSolde($solde)
    {
        $this->_solde = $solde;

        return $this;
    }
}
?>