<?php
	/**
	*
	*/
	class voiture {

		private $_numSerie;
		private $_marque;
		private $_modele;
		private $_annee;
		private $_km;
		private $_typeCarb;
		private $_bteVit;
		private $_couleur;

		function __construct($marque,$modele,$annee,$km,$typeCarb,$bteVit,$couleur)
		{
			$this->_marque=$marque;
			$this->_modele=$modele;
			$this->_annee=$annee;
			$this->_km=$km;
			$this->_typeCarb=$typeCarb;
			$this->_bteVit=$bteVit;
			$this->_couleur="blanche";
		}

		function infosVoiture() {
			echo "Marque : ".$this->_marque."<br>"
			."Modèle : ".$this->_modele."<br>"
			."Année : ".$this->_annee."<br>"
			."Kilometrage ".$this->_km."<br>"
			."Carburant ".$this->_typeCarb."<br>"
			."Boite de vitesse ".$this->_bteVit."<br>"
			;
		}

    public function getNumSerie()
    {
        return $this->_numSerie;
    }


    private function _setNumSerie($numSerie)
    {
        return $self::$_numSerie = $self::$_numSerie+1;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    private function _setMarque($marque)
    {
        $this->_marque = $marque;

        return $this;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    private function _setModele($modele)
    {
        $this->_modele = $modele;

        return $this;
    }

    public function getAnnee()
    {
        return $this->_annee;
    }

    private function _setAnnee($annee)
    {
        $this->_annee = $annee;

        return $this;
    }

    public function getKm()
    {
        return $this->_km;
    }

    private function _setKm($km)
    {
        $this->_km = $km;

        return $this;
    }

    public function getTypeCarb()
    {
        return $this->_typeCarb;
    }

    private function _setTypeCarb($typeCarb)
    {
        $this->_typeCarb = $typeCarb;

        return $this;
    }

    public function getBteVit()
    {
        return $this->_bteVit;
    }

    private function _setBteVit($bteVit)
    {
        $this->_bteVit = $bteVit;

        return $this;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    private function _setCouleur($couleur)
    {
        $this->_couleur = $couleur;

        return $this;
    }
}
?>