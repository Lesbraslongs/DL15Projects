<?php
require_once ("clone.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Modification d'une personne</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modifier une personne</h2>
    <a href="index.php">Retour à l'accueil</a>
    <form action="clone.php" method="post" class="form-horizontal" role="form">
      <div class="form-group">
        <input type="text" name="firstName" placeholder="Prenom" class="form-control">
        <input type="text" name="lastName" placeholder="Nom" class="form-control">
      </div>
      
      <div class="form-group">
        <input type="text" name="city" placeholder="Ville" class="form-control">
        <input type="text" name="birthDate" placeholder="ex: 12-10-1982" class="form-control">
       </div>
       
      <input type="submit"  class="btn btn-default" />
    </form>
  </div>
  </body>
</html>