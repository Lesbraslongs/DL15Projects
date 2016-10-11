<?php
require_once ("personneDTO.php");
class personneDAO {
    private $_pdo;
    
    public function __construct(PDO $pdo) {
        $this->_pdo = $pdo;
    }
    
    public function insert(){
    $pdo = Config::getPdo();
    $stmt = $pdo->prepare("INSERT INTO personne (nom,prenom,ville,dateNaissance) VALUES (?,?,?,?);");
    $stmt->bindValue(1, $this->_nom);
    $stmt->bindValue(2, $this->_prenom);
    $stmt->bindValue(3, $this->_ville);
    $stmt->bindValue(4, $this->_dateNaissance);
    $stmt->execute();
    // get last inserted id
    $lastId = $pdo->lastInsertId();

    $this->setId($lastId);
  }
  
  public function update($id){
      $pdo = Config::getPdo();
      $stmt = $pdo->prepare("UPDATE personne SET nom = ?, prenom = ?, ville = ?, dateNaissance = ? WHERE personne.personne_id = ".$id.";");
      $stmt->bindValue(1, $this->_nom);
      $stmt->bindValue(2, $this->_prenom);
      $stmt->bindValue(3, $this->_ville);
      $stmt->bindValue(4, $this->_dateNaissance);
      $stmt->execute();
      //$stmt->bindValue(5, $this->_id);
      //$res = $stmt->fetch();
      //return $res[""];
      
  }
  
  public function delete($id=null){
    $pdo = Config::getPdo();
    $stmt = $pdo->prepare("DELETE FROM personne WHERE personne_id = ? ;");
    $stmt->bindValue(1, $id);
    $stmt->execute();

  }
  
  // get one PersonDTO in database by his id
  public function find($id){
    $id = (int)$id;
    $p = false;

    $stmt = $this->pdo->prepare('SELECT personne_id, nom, prenom, ville, date_naissance FROM personne WHERE personne_id = ?;');
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

    $stmt = $this->pdo->prepare('SELECT personne_id, nom, prenom, ville, date_naissance FROM personne ORDER BY nom;');

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

?>
