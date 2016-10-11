<?php
require_once("artiste.php");

class realisateur extends artiste
{
	private $_filmsR;
	function __construct($prenom,$nom,$filmsR)
	{
		parent::__construct($prenom,$nom);
		$this->_filmsR=$filmsR;
	}

    public function getFilmsR()
    {
        return $this->_filmsR;
    }

    public function _setFilmsR($filmsR)
    {
        $this->_filmsR = $filmsR;

        return $this;
    }
}
?>