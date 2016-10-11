<?php
require_once "src/PersonDAO.php";
require_once "src/PersonDTO.php";
require_once "src/MySQLConnection.php";
//require_once "modiForm.php";

if(isset($_GET['id'])){
        $dao = new PersonDAO(MySQLConnection::getPdo());
        $pers = new PersonDTO();
        //$id = intval($_GET["id"]);
        include ("insertForm.php");
        $pers->hydrate($_POST);
        //var_dump($_POST);
        //die();
        $dao->update($pers);
        //var_dump($dao);
}
//header('Location: index.php');


