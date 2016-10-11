<?php
	require_once("stagiaire.php");
	require_once("formateur.php");
	$stagiaire1 = new stagiaire("durant","kevin","26/08/1992","10 rue de toulouse","31000","Toulouse","0561154226");
	echo $stagiaire1->infosIndividu();

	$form1 = new formateur("durant","kevin","0561154226");
	echo $form1->infosIndividu();
?>