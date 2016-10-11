<?php
require_once('entreprise.php');
  class Personne {
    private $_firstName;
    private $_employeur;
    private $_date_embauche;

    public function __construct($Fname){
      $this->_firstName = $Fname;
    //  $this->_lastName = $Lname;
    }
    public function infos(){
      return " Nom : ". $this->_firstName." travaille chez ".$this->_employeur->getNom()." ".$this->_date_embauche;
    }
   public function setNom($Lname)
{
	$this->_firstName = $Lname;
}
	public function getNom()
{
	return $this->_firstName;
}

	public function estEmbauche(Entreprise $letps,$dateEmbauche)
{
$this->_employeur=$letps;
$this->_date_embauche=$dateEmbauche;
}
  }
?>
