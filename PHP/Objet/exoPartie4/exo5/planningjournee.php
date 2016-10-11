<?php
require_once("miniexcursionplanifiee.php");

class PlanningJournee {
	private $_date;
	private $_lesMiniExcursionsPlanifiees=array();
	function __construct($date,$lesMiniExcursionsPlanifiees) {
	// définit le constructeur avec les éléments passés en paramètres
		$this->_date=$date;
		$this->_lesMiniExcursionsPlanifiees=$lesMiniExcursionsPlanifiees;
	}
	function getDate() {
	// retourne la date de la classe
		return $this->_date;
	}
	function getLesMiniExcursionsPlanifiees() {
	// retourne les mini excursions planifiées
		return $this->_lesMiniExcursionsPlanifiees;
	}
	function setDate($date) {
	// redéfinit la date
		$this->_date=$date;
		return $this;
	}
	function setLesMiniExcursionsPlanifiees($lesMiniExcursionsPlanifiees) {
	// redéfinit les mini excursions planifiées
		$this->_lesMiniExcursionsPlanifiees[]=$lesMiniExcursionsPlanifiees;
		return $this;
	}
}
?>

