<?php
require_once("personne.php");

class stagiaire extends personne
{
	private $_ddn;
	private $_adresse;
	private $_cp;
	private $_ville;
	function __construct($nom,$prenom,$tel,$ddn,$adresse,$cp,$ville)
	{
		parent::__construct($nom,$prenom,$tel);
		$this->_ddn=$ddn;
		$this->_adresse=$adresse;
		$this->_cp=$cp;
		$this->_ville=$ville;
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

    public function getDdn()
    {
        return $this->_ddn;
    }

    public function _setDdn($ddn)
    {
        $this->_ddn = $ddn;

        return $this;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function _setAdresse($adresse)
    {
        $this->_adresse = $adresse;

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
}
?>