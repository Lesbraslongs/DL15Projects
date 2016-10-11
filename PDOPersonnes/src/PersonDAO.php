<?php
// src/PersonDAO

require_once "PersonDTO.php";

class PersonDAO{
  private $pdo;

  // You must give this DAO a PDO object
  public function __construct(PDO $pdo){
    $this->pdo = $pdo;
  }

  // insert a PersonDTO in database
  public function insert(PersonDTO $p){
    $stmt = $this->pdo->prepare("INSERT INTO personne (nom, prenom, ville, dateNaissance) VALUES (?,?,?,?);");
    // bind values of the object
    $stmt->bindValue(1, $p->getLastName());
    $stmt->bindValue(2, $p->getFirstName());
    $stmt->bindValue(3, $p->getCity());
    $stmt->bindValue(4, $p->getBirthDateSQL());
    // execute statement
    $stmt->execute();
    // set the new Id
    $p->setId(intval($this->pdo->lastInsertId()));

    return $p;
  }

  // update one PersonDTO in database
  public function update(PersonDTO $p){
    // if id = -1, there is nothing to do
    if (-1 === $p->getid()) return;

    $rqt = "UPDATE personne SET nom = ?, prenom = ?, ville = ?, dateNaissance = ? WHERE personne_id = ?;";
    $stmt = $this->pdo->prepare($rqt);
    // bind values to the request
    $stmt->bindValue(1, $p->getLastName());
    $stmt->bindValue(2, $p->getFirstName());
    $stmt->bindValue(3, $p->getCity());
    $stmt->bindValue(4, $p->getBirthDateSQL());
    $stmt->bindValue(5, $p->getId());
    // execute the request
    $stmt->execute();

  }

  // delete one PersonDTO in database
  public function delete($id){
    // if id = -1, there is nothing to do
    if (-1 === $id) return;

    $rqt = "DELETE FROM personne WHERE personne_id = ?;";
    $stmt =$this->pdo->prepare($rqt);

    $stmt->bindValue(1, $id);

    $stmt->execute();
  }

  // get one PersonDTO in database by his id
  public function find($id){
    $id = (int)$id;
    $p = false;

    $stmt = $this->pdo->prepare('SELECT personne_id, nom, prenom, ville, dateNaissance FROM personne WHERE personne_id = ?;');
    $stmt->bindValue(1, $id);

    $stmt->execute();
    // Only one result, and it's an array
    // return only the association array with option FETCH_ASSOC
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    // $res can be null
    if($res){
      $p = new PersonDTO();
      $p->hydrateSQL($res);
    }

    return $p;
  }

  // Find All person in database, return an array of PersonDTO
  public function findAll(){
    // we will return this array
    $personnes = [];

    $stmt = $this->pdo->prepare('SELECT personne_id, nom, prenom, ville, dateNaissance FROM personne ORDER BY nom;');

    $stmt->execute();
    // get All
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // parse each $results (it's an array)
    foreach ($results as $res) {
      // new Person instance
      $p = new PersonDTO();
      $p->hydrateSQL($res);
      // add it to our array
      $personnes[] = $p;
    }

    return $personnes;
  }
}
