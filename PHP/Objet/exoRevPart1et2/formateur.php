<?php

class formateur
{
	private $_nom;
	private $_prenom;
	private $_tel;
	private $_numIntervenant;
	private $_ddc;
	private static $_nbInterv=0;

	function __construct($nom,$prenom,$tel)
	{
		$this->_nom=$nom;
		$this->_prenom=$prenom;
		$this->_tel=$tel;
		self::$_nbInterv=self::$_nbInterv+1;
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

    public function getNom()
    {
        return $this->_nom;
    }

    public function _setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function _setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    public function getTel()
    {
        return $this->_tel;
    }

    public function _setTel($tel)
    {
        $this->_tel = $tel;

        return $this;
    }

    public function getNumIntervenant()
    {
        return $this->_numIntervenant;
    }

    public function _setNumIntervenant($numIntervenant)
    {
        $this->_numIntervenant = $numIntervenant;

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