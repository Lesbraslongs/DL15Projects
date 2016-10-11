<?php
// procecss.php
// Processing index form...

require_once "src/PersonDTO.php";
require_once "src/PersonDAO.php";
require_once "src/MySQLConnection.php";
require_once "clone.php";

// TODO: $_POST Data validation and errors...

        if(isset($_POST['firstName'], $_POST['lastName'], $_POST['city'], $_POST['birthDate'])){
            $dao = new PersonDAO(MySQLConnection::getPdo());

            $_POST['lastName'] = strip_tags($_POST['lastName']);
            $_POST['firstName'] = strip_tags($_POST['firstName']);
            $_POST['city'] = strip_tags($_POST['city']);
            $_POST['birthDate'] = strip_tags($_POST['birthDate']);

            $pers = new PersonDTO();
            $pers->hydrate($_POST);
            
            if (isset($_GET["id"])){
                if ($_GET["id"] === -1) {
                    $dao->insert($pers); 
                }else {
                    $dao->update($pers);
                }
            }
        }

header('Location: index.php');
