<?php
/**
*
*/
class Individu{
	private $_nom;
	private $_prenom;
	function __construct($prenom,$nom) {
		$this->_nom=$nom;
		$this->_prenom=$prenom;
	}

	function __destruct() {
		echo "destruction de ".$this->_nom." ".$this->_prenom;
	}

	public function infosIndividu() {
		return "L'individu à pour prenom ".$this->_prenom." et ".$this->_nom." pour nom.";
	}

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    private function _setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    private function _setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }
}
?>