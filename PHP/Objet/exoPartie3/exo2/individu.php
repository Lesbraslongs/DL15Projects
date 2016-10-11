<?php
// --- Individu.php
class Individu {
	// --- Propriétés
	protected $_nom;
	protected $_prenom;
	// --- Méthodes
	public function __construct($nom,$prenom) {
		$this->_nom=$nom;
		$this->_prenom=$prenom;
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

    public function getPrenom()
    {
        return $this->_prenom;
    }

    protected function setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }
}
?>