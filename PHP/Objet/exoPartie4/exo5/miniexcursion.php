<?php
require_once("etape.php");

class MiniExcursion {

	protected $_numMiniExcursion;
	protected $_libelleMiniExcursion;
	protected $_nbrePlaces;
	protected $_etape=array();

	public function __construct($libelleMiniExcursion, $nbrePlace, $lesEtapes) {
	// construit l'objet avec les valeurs passées en paramètres
	// le numéro de l'excursion est directement construit grâce au nombre d'excursion
	$this->_libelleMiniExcursion=$libelleMiniExcursion;
	$this->_nbrePlaces=$nbrePlace;
	$this->_etape=$lesEtapes;
	}
	public function getNumMiniExcursion() {
	//retourne le numéro de l'excursion
	return $this->_numMiniExcursion;
	}
	public function getLibelleMiniExcursion() {
	// retourne le libellé
		return $this->_libelleMiniExcursion;
	}
	public function getNbrePlaces() {
	// retourne le nombre de place disponible pour cette excursion
		return $this->_nbrePlaces;
	}
	public function setLibelleMiniExcursion($libelleMiniExcursion) {
	// redéfinit le libellé de l'excursion
		$this->_libelleMiniExcursion = $libelleMiniExcursion;
		return $this;
	}
	public function setNbrePlaces($nbrePlace) {
	// redéfinit le nombre de place disponibles de l'excursion
		$this->_nbrePlaces = $nbrePlace;
		return $this;
	}
	public function ajouteEtape($uneEtape)
	{
	// ajoute une etape à l'excurison
		$this->_etape[]=$uneEtape;
	}
	public function __destruct()
	{
	//détruit tous les étapes de l'excursion
	}
	public function donneDureePrevue()
	{
	// retourne la durée prévue formatée en minutes
	$somme = 0;
		foreach ($this->_etape as $key => $value) {
			$somme += $value->getDureePrevue();
		}
		return $somme;
	}
	public function donneDureePrevueHHMM()
	{
	//retourne la durée prévue sous la forme HH:MM exemple 02:05
	// pour information floor(12,5) retourne 12
	// la fonction donneDureePrevue peut vous servir ici...
		foreach ($this->_etape as $key => $value) {
			return sprintf("%02d", (floor($this->donneDureePrevue()/60))) . " : " . sprintf("%02d", (floor($this->donneDureePrevue()%60)));
		}
		//sprintf("%02d",8);
	}

}


?>

