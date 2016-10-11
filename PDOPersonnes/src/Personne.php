<?php

//use DateTime;

require_once("MySQLConnection.php");

class Personne{
  private $id = -1; // int
  private $nom; // string
  private $prenom; // string
  private $ville; // string
  private $dateNaissance; // DateTime

  public function __construct(){
    $this->dateNaissance = new DateTime();
  }

  public function setId($id){
    $this->id = $id;
    return $this;
  }

  public function getId(){
    return $this->id;
  }

  public function setNom($nom){
    $this->nom = $nom;
    return $this;
  }

  public function getNom(){
    return $this->nom;
  }

  public function setPrenom($prenom){
    $this->prenom = $prenom;
    return $this;
  }

  public function getPrenom(){
    return $this->prenom;
  }

  public function getVille(){
    return $this->ville;
  }

  public function setVille($ville){
    $this->ville = $ville;
    return $this;
  }

  public function getDateNaissance(){
    return $this->dateNaissance;
  }


   public function __toString(){
    return  "[nom] : " . $this->nom . "<br/>" .
            "[prenom] : " . $this->prenom . "<br/>" .
            "[ville] : " . $this->ville . "<br/>" .
            "[dateNaissance] : " . $this->getBirthDateFR() . "<br/>";
  }

  public function insert(){
    try{
     $pdo = MySQLConnection::getPdo();

      $stmt = $pdo->prepare("INSERT INTO personne(nom, prenom, ville, date_naissance) VALUES(?, ?, ?, ?);");
      $stmt->bindValue(1, $this->nom);
      $stmt->bindValue(2, $this->prenom);
       $stmt->bindValue(3, $this->ville);
        $stmt->bindValue(4, $this->dateNaissance);

      $stmt->execute();
      
      $stmt->closeCursor();
    }
    catch(PDOException $e){
      echo $e->getMessage();
      die();
    }
  }
}
