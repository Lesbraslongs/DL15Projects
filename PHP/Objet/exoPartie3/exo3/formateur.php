<?php
require_once("personne.php");

class formateur extends personne
{
	private $_numInterv;
	private $_ddc;
	private static $_nbInterv=0;
	function __construct($nom,$prenom,$tel)
	{
		parent::__construct($nom,$prenom,$tel);
		self::$_nbInterv=self::$_nbInterv+1;
		$this->_ddc=date("Ymd");
		$this->_numIntervenant=date("Ymd")+$nbInterv;
	}

	function infosIndividu() {
		echo "nom : ".$this->_nom."<br>"
		."prenom : ".$this->_prenom."<br>"
		."Numero de Telephone : ".$this->_tel."<br>"
		."numero Intervenant : ".$this->_numIntervenant."<br>"
		."date creation : ".date("Ymd")."<br>"
		."Nombre Intervenant : ".self::$_nbInterv."<br>";
	}

    public function getNumInterv()
    {
        return $this->_numInterv;
    }

    public function _setNumInterv($numInterv)
    {
        $this->_numInterv = $numInterv;

        return $this;
    }

    public function getDdc()
    {
        return $this->_ddc;
    }

    public function _setDdc($ddc)
    {
        $this->_ddc = $ddc;

        return $this;
    }

    public function getNbInterv()
    {
        //return $this->_nbInterv;
        return self::$_nbInterv;
    }

    public function _setNbInterv($nbInterv)
    {
        $this->_nbInterv = $nbInterv;

        return $this;
    }
}
?>