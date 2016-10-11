<?php

require_once "MySQLConnection.php";

class Realisateur{
  private $id;
  private $name;

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
    return $this;
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
    return $this;
  }

  public function insert(){
    $pdo = MySQLConnection::getPdo();
    $stmt = $pdo->prepare("INSERT INTO realisateur (nom_realisateur) VALUES (?);");
    $stmt->bindValue(1, $this->name);
    $stmt->execute();
    // get last inserted id
    $lastId = $pdo->lastInsertId();

    $this->setId($lastId);
  }
  
  public function select($id) {
      $pdo = MySQLConnection::getPdo();
      $stmt=$pdo->prepare("SELECT nom_realisateur FROM realisateur WHERE realisateur_id = ? ;");
      $stmt->bindValue(1, $id);
      $stmt->execute();
      
      $result = $stmt->fetch();
      //var_dump($result['nom_realisateur']);
      return $result['nom_realisateur'];
  }
  
  public function delete($id=null){
    $pdo = MySQLConnection::getPdo();
    $stmt = $pdo->prepare("DELETE FROM realisateur WHERE realisateur_id = ? ;");
    $stmt->bindValue(1, $id);
    $stmt->execute();

  }
  
  public function find ($id) {
      
      $id = (int)$id;
      $p=false;
      
      $stmt=$this->pdo->prepare("SELECT personne_id,nom,prenom,ville,dateNaissance FROM personne where personne_id = ?");
      $stmt->bindValue(1,$id);
      
      $stmt->execute();
      
      $res = $stmt->fetch(PDO::FETCH);
      
      if($res){
          $p = new PersonneDTO();
          $p->hydrateSQL($res);
      }
      
      return $p;
 }
  }
  

