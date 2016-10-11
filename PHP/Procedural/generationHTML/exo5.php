<?php
	include('fonction.php');
	$partiesMenu=array('un'=>'1','deux'=>'2','trois'=>'3','quatre'=>'4','cinq'=>'5');
	$valeurRadio=array('homme','femme','enfant');
	$tabCheck=array('vehicule1'=>'velo','vehicule2'=>'moto','vehicule3'=>'jetski','vehicule4'=>'vaisseau');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<?php
		form('traitement','post','Infos Perso');
		input('text','prenom','','Entrez votre prénom');
		echo "<br><br>";
		dropDown($partiesMenu);
		echo "<br><br>";
		radio('gender',$valeurRadio);
		echo "<br><br>";
		checkBox($tabCheck);
		submit('envoyer','Go!');
		finForm();
	?>

</body>
</html>