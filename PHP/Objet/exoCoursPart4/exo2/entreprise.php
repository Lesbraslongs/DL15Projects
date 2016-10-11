<?php
require_once("personne.php");
class Entreprise {
	private $_raisonSociale;
	private $_lesEmployees=array();

	public function __construct($rs,$employes) {
		$this->
	}

	public function ajouteSalarie(personne $unePersonne) {

	}

    public function getRaisonSociale()
    {
        return $this->_raisonSociale;
    }

    public function _setRaisonSociale($raisonSociale)
    {
        $this->_raisonSociale = $raisonSociale;

        return $this;
    }

    public function getLesEmployees()
    {
        return $this->_lesEmployees;
    }

    public function _setLesEmployees($lesEmployees)
    {
        $this->_lesEmployees = $lesEmployees;

        return $this;
    }
}

?>