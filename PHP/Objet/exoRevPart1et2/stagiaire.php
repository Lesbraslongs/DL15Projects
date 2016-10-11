<?php

class stagiaire
{
	private $_nom;
	private $_prenom;
	private $_ddn;
	private $_adr;
	private $_cp;
	private $_ville;
	private $_tel;

	function __construct($nom,$prenom,$ddn,$adr,$cp,$ville,$tel)
	{
		$this->_nom=$nom;
		$this->_prenom=$prenom;
		$this->_ddn=$ddn;
		$this->_adr=$adr;
		$this->_cp=$cp;
		$this->_ville=$ville;
		$this->_tel=$tel;
	}

	function infosIndividu() {
		echo "nom : ".$this->_nom."<br>"
		."prenom : ".$this->_prenom."<br>"
		."date de Naissance : ".$this->_ddn."<br>"
		."adresse : ".$this->_adr."<br>"
		."code postal : ".$this->_cp."<br>"
		."ville : ".$this->_ville."<br>"
		."telephone : ".$this->_tel."<br>";
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

    public function getDdn()
    {
        return $this->_ddn;
    }

    public function _setDdn($ddn)
    {
        $this->_ddn = $ddn;

        return $this;
    }

    public function getAdr()
    {
        return $this->_adr;
    }

    public function _setAdr($adr)
    {
        $this->_adr = $adr;

        return $this;
    }

    public function getCp()
    {
        return $this->_cp;
    }

    public function _setCp($cp)
    {
        $this->_cp = $cp;

        return $this;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function _setVille($ville)
    {
        $this->_ville = $ville;

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
}
?>