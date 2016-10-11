<?php
require_once("compte.php");
class CompteEpargne extends compte {
	private $_taux_interet;
	public function __construct($unNum,$unNom,$unSolde,$unTaux) {
		parent::__construct($unNum,$unNom,$unSolde) ;
		$this->_taux_interet=$unTaux ;
	}


    public function getTauxInteret()
    {
        return $this->_taux_interet;
    }

    private function _setTauxInteret($taux_interet)
    {
        $this->_taux_interet = $taux_interet;

        return $this;
    }
}

?>