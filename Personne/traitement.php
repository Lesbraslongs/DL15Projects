<?php
require_once ("personneDTO.php");
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["ville"]) && isset($_POST["ddn"])){
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["ville"]) && !empty($_POST["ddn"])) {
        
        $pers = new PersonneDTO();
        $pers->hydrate($_POST);
    }else {
        echo "ERREUR : Veuillez completer tous les champs.";
    }
}
//header('Location: ../index.php');
?>
