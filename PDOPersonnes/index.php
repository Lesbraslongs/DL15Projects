<?php
  require_once "src/PersonDAO.php";
  require_once "src/MySQLConnection.php";
  require_once "src/PersonDTO.php";

  $dao = new PersonDAO(MySQLConnection::getPdo());

  $persons = $dao->findAll();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Personne</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>
 
  <div class="container">
    <div class="jumbotron"><h1>Gestion de personnes</h1></div>
  <div class="navbar-header"></div>
    <a href="insertForm.php"><span class="glyphicon glyphicon-plus"></span> &nbsp;Insérer une nouvelle personne</a>
    <table class="table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($persons as $person): ?>
        <tr>
          <td><?= $person->getLastName() ?></td>
          <td><?= $person->getFirstName() ?></td>
          <td>
            <a href="delete.php?id=<?= $person->getId() ?>"><span class="glyphicon glyphicon-trash"></span></a>
            <a href="process.php?id=<?= $person->getId() ?>"><span class="glyphicon glyphicon-plus-sign"></span></a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

    <!-- <form action="process.php" method="post">
      <input type="text" name="firstName" placeholder="Prenom">
      <input type="text" name="lastName" placeholder="Nom">
      <input type="text" name="city" placeholder="Ville">
      <input type="text" name="birthDate" placeholder="ex: 12-10-1982">
      <input type="submit"/>
    </form> -->
      <footer>
        <p>&copy; 2016 IMIE.</p>
      </footer>
  </div>  <!-- /container -->
  </body>
</html>
