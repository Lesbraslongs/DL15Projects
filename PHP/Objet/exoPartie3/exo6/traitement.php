<?php
session_start();
//session_destroy();
require_once("acteur.php");
require_once("realisateur.php");


if (isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["film"]) && isset($_POST["cachet"])) {
	if (!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["film"]) && !empty($_POST["cachet"])) {

		$_SESSION["prenom"]=$_POST["prenom"];
		$_SESSION["nom"]=$_POST["nom"];
		$_SESSION["film"]=$_POST["film"];
		$_SESSION["cachet"]=$_POST["cachet"];
		var_dump($_SESSION);
	}else{
		echo "ERREUR : veuillez completer tous les champs";
	}
}

//header("location: index.php");
?>