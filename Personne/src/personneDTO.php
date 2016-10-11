<?php

use DateTime;

require_once ("Config.php");
class PersonneDTO {

    private $_id = -1;
    private $_nom;
    private $_prenom;
    private $_ville;
    private $_dateNaissance;

    function __construct() {
        $this->_dateNaissance = new DateTime();
        
    }
    
    function getId() {
        return $this->_id;
    }

    function getNom() {
        return $this->_nom;
    }

    function getPrenom() {
        return $this->_prenom;
    }

    function getVille() {
        return $this->_ville;
    }

    function getDateNaissance(){
        return $this->_dateNaissance;
    }

  // return the birth date in SQL format : 1985-02-24
  public function getDateNaissanceSQL(){
    return $this->_dateNaissance->format('Y-m-d');
  }

  // return the birth date in FR format : 24-02-1985
  public function getDateNaissanceFR(){
    return $this->_dateNaissance->format('d-m-Y');
  }

  // set _dateNaissance (DateTime given)
  public function setDateNaissanceDT(DateTime $date){
    $this->_dateNaissance = $date;
    return $this;
  }

  // set _dateNaissance (String in SQL format given)
  public function setBirthDateSQL($dateNaissance){
    if(!$this->_dateNaissance = DateTime::createFromFormat('Y-m-d', $dateNaissance)){
      $this->_dateNaissance = new DateTime();
    }
    return $this;
  }

  // set _dateNaissance (String in FR format given)
  public function setBirthDate($dateNaissance){
    if(!$this->_dateNaissance = DateTime::createFromFormat('d-m-Y', $dateNaissance)){
      $this->_dateNaissance = new DateTime();
    }
    // Equivalent to :
    // $this->_dateNaissance = DateTime::createFromFormat('d-m-Y', $dateNaissance);
    // if(!$this->_dateNaissance){
    //   $this->_dateNaissance = new DateTime();
    // }

    return $this;
  }

    function setId($id) {
        $this->_id = $id;
    }

    function setNom($nom) {
        $this->_nom = $nom;
    }

    function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    function setVille($ville) {
        $this->_ville = $ville;
    }

    function setDateNaissance($dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }
    
    public function __toString() {
        return $this->_id.$this->_nom.$this->prenom.$this->_ville.$this->_dateNaissance;
    }

  
  
  
  public function select($id) {
      $pdo = Config::getPdo();
      $stmt=$pdo->prepare("SELECT nom, prenom FROM personne WHERE personne_id = ? ;");
      $stmt->bindValue(1, $id);
      $stmt->execute();
      
      $result = $stmt->fetch();
      var_dump($result["prenom"]);
      return $result["prenom"];
  }
  
  public function hydrate($donnees){
    foreach ($donnees as $key => $value){
        // On récupère le nom du setter correspondant à l'attribut.
        $method = 'set'.ucfirst($key);
        // Si le setter correspondant existe.
        if (method_exists($this, $method)) {
            // On appelle le setter.
            $this->$method($value);
        }
    }
 }
 
 // Ok to hydrate with SQL data
  public function hydrateSQL($res){
    $this->setId($res['personne_id'])
      ->setLastName($res['nom'])
      ->setFirstName($res['prenom'])
      ->setCity($res['ville'])
      ->setBirthDateSQL($res['date_naissance']);

    return $this;
  }
 
}
 
