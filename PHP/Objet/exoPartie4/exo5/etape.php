<?php
class Etape {

	private $_numEtape;
	private $_descriptionPrevue;
	private $_dureePrevue;
	private static $_nbEtape =0;

	function __construct($descriptionPrevue, $dureePrevue) {
	// construit l'objet avec les valeurs passées en paramètres
	// le numéro de l'étape est directement construit grâce au nombre d'étape
	$this->_descriptionPrevue=$descriptionPrevue;
	$this->_dureePrevue=$dureePrevue;
	self::$_nbEtape=self::$_nbEtape+1;
	$this->_numEtape=self::$_nbEtape;
	}
	public function getNumEtape() {
	// retourne le numéro de l 'étape
	return $this->_numEtape;
	}
	public function getDescriptionPrevue() {
	// retourne la description
		return $this->_descriptionPrevue;
	}
	public function donneDureePrevueHHMM() {
	//retourne la durée prévue sous la forme HH:MM exemple 02:05
	// pour information floor(12,6) retourne 12
	// indice je vous conseille d'utiliser une variable heure et minutes
		$heures=floor($this->_dureePrevue / 60);
		$minutes=floor($this->_dureePrevue % 60);
		return sprintf("%02d", $heures) . " : " . sprintf("%02d", $minutes);
	}
	public function getDureePrevue() {
	//indique la durée prévue
		return $this->_dureePrevue;
	}
	static function getNbEtape() {
	// indique le nombre d'étape
		return self::$_nbEtape;
	}
	public function setDescriptionPrevue($descriptionPrevue) {
	//redéfinie la description
		$this->_descriptionPrevue = $descriptionPrevue;
		return $this;
	}
	public function setDureePrevue($dureePrevue) {
	// redéfinie la durée prévue
		$this->_dureePrevue=$dureePrevue;
		return $this;
	}

    public function setNumEtape($numEtape)
    {
        $this->_numEtape = $numEtape;

        return $this;
    }
}
?>

