<?php
// --- Salarie.php
require_once("Individu.php");
class Salarie extends Individu {
	private $_salaire;
	public function __construct($nom, $prenom, $salaire) {
		parent::__construct($nom,$prenom);
		$this->_salaire=$salaire;
	}

    public function getSalaire()
    {
        return $this->_salaire;
    }

    private function _setSalaire($salaire)
    {
        $this->_salaire = $salaire;

        return $this;
    }
}
?>