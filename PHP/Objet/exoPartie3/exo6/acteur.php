<?php
require_once("artiste.php");

class acteur extends artiste
{
	private $_filmsJ;
	private $_cachet;
	public function __construct($prenom,$nom,$filmsJ,$cachet)
	{
		parent::__construct($prenom,$nom);
		$this->_filmsJ=$filmsJ;
		$this->_cachet=$cachet;
	}

	function infosActeur(){
		echo "<table border=".'1px'.">";
		echo "<tr>";
		  echo "<th>Prenom</th>";
		  echo "<th>Nom</th>";
		  echo "<th>Film</th>";
		  echo "<th>Cachet</th>";
		  echo "</tr>";
		  echo "<tr>";
		  echo "<td>$this->_prenom</td>";
		  echo "<td>$this->_nom</td>";
		  echo "<td>$this->_filmsJ</td>";
		  echo "<td>$this->_cachet</td>";
		  echo "</tr>";
		  echo "</table>";
	}

    public function getFilmsJ()
    {
        return $this->_filmsJ;
    }

    public function _setFilmsJ($filmsJ)
    {
        $this->_filmsJ = $filmsJ;

        return $this;
    }

    public function getCachet()
    {
        return $this->_cachet;
    }

    public function _setCachet($cachet)
    {
        $this->_cachet = $cachet;

        return $this;
    }
}
?>