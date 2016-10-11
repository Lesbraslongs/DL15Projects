<?php

session_start();
//session_destroy();
//include('fonction.php');

if(isset($_GET["suppr"])){

		//$_SESSION["suppr"]=$_GET["suppr"];
		//var_dump($_SESSION["suppr"]);
		unset($_SESSION['task'][$_GET["suppr"]]);

	}
	//var_dump($_SESSION["suppr"]);
	header('location: index.php');
?>