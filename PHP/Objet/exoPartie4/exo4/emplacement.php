<?php

abstract class Emplacement {
	protected $_couleur;
	protected $_xCentre;
	protected $_yCentre;

	protected function __construct($couleur, $xCentre, $yCentre)
	{
	// constructeur ecrit dans le parent qui ne peut être utilisé que par les classes filles
		$this->_couleur = $couleur;
		$this->_xCentre = $xCentre;
		$this->_yCentre = $yCentre;
	}
	abstract function affiche();


    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($couleur)
    {
        $this->_couleur = $couleur;

        return $this;
    }

    public function getCentre1()
    {
        return $this->_xCentre;
    }

    public function setCentre1($xCentre)
    {
        $this->_xCentre = $xCentre;

        return $this;
    }

    public function getCentre2()
    {
        return $this->_yCentre;
    }

    public function setCentre2($yCentre)
    {
        $this->_yCentre = $yCentre;

        return $this;
    }
}
?>