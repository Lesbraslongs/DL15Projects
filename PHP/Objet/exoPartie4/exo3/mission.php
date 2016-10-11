<?php
require_once("intervenant.php");
class Mission {

	private $_nom;
	private $_desc;
	private $_nbHPrev;
	private $_executant;
	private $_releveHoraire = array();

	public function __construct($nom,$desc,$nbHPrev,$executant)
	{
		$this->setNom($nom);
		$this->setDesc($desc);
		$this->setNbHPrev($nbHPrev);
		$this->setExecutant($executant);
	}

	public function AjoutReleve($date,$nbH)
	{
	/*ajoute au tableau releveHoraire à l'indice $laDate la valeur $nbreHeures */
		/*foreach ($this->_releveHoraire as $key => $value) {
			$key=$date;
			$value=$nbH;
		}*/
		return $this->_releveHoraire[$date]=$nbH;
	}

	public function getReleveHoraire()
	{
		return $this->_releveHoraire;
	}

	public function nbHeuresEffectues()
	{
	/* grâce au tableau releve horaire additionne les nombres d'heures effectuées et retourne le total */
	$i=0;
	foreach ($this->_releveHoraire as $key => $value) {
			$i += $value;
		}
		return $i;
	}

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getDesc()
    {
        return $this->_desc;
    }

    public function setDesc($desc)
    {
        $this->_desc = $desc;

        return $this;
    }

    public function getNbHPrev()
    {
        return $this->_nbHPrev;
    }

    public function setNbHPrev($nbHPrev)
    {
        $this->_nbHPrev = $nbHPrev;

        return $this;
    }

    public function getExecutant()
    {
        return $this->_executant->getTauxH();
    }

    public function setExecutant($executant)
    {
        $this->_executant = $executant;

        return $this;
    }
}