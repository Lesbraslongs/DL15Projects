<?php
require_once "src/PersonDAO.php";
require_once ("clone.php");
require_once "src/PersonDTO.php";

$title="Ajout ";
$h2 = "Enrigister une nouvelle ";
$nom = "";
$prenom = "";
$ville="";
$dateNaissance="";
$id=-1;

if (isset($_GET["id"])) {
    $title="Modification ";
    $h2="Modifier les infos d'une ";
    $nom=$pers->getLastName();
    $prenom=$pers->getFirstName();
    $ville=$pers->getCity();
    $dateNaissance=$pers->getBirthDateFR();
    $id= intval($_GET["id"]);
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><?=$h2?> Personne</h2>
    <a href="index.php">Retour à l'accueil</a>
    <form action="process.php" method="post" class="form-horizontal" role="form">
      <div class="form-group">
          <input type="text" name="firstName" placeholder="Prenom" value="<?= $prenom ?>" class="form-control">
        <input type="text" name="lastName" placeholder="Nom" value="<?= $nom ?>" class="form-control">
      </div>
      
      <div class="form-group">
        <input type="text" name="city" placeholder="Ville" value="<?= $ville ?>" class="form-control">
        <input type="text" name="birthDate" placeholder="ex: 12-10-1982" value="<?= $dateNaissance ?>" class="form-control">
       </div>
       
      <input type="submit"  class="btn btn-default" />
    </form>
  </div>
  </body>
</html>
