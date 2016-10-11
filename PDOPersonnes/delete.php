<?php
require_once "src/PersonDAO.php";
require_once "src/PersonDTO.php";
require_once "src/MySQLConnection.php";

if(isset($_GET['id'])){
  $dao = new PersonDAO(MySQLConnection::getPdo());
  $id = intval($_GET['id']);

  $dao->delete($id);
}

header('Location: index.php');
