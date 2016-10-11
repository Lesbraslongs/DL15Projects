<?php
require_once("miniexcursion.php");

class MiniExcursionPayante extends MiniExcursion {

	private $_tarif;
	public function __construct($libelleMiniExcursion, $nbrePlace, $lesEtapes,$tarif) {
		parent::__construct($libelleMiniExcursion, $nbrePlace, $lesEtapes);
		$this->_tarif=$tarif;
	}

    public function getTarif()
    {
        return $this->_tarif;
    }

    public function _setTarif($tarif)
    {
        $this->_tarif = $tarif;

        return $this;
    }
}
?>