<?php
	include('fonction.php');
	$tabTVA=array('5.5 %','8.5%','10%','20%');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calcul TVA</title>
</head>
<body>
	<?php
	//--------------------VERSION TAUX AFFICHES----------------
		/*form('traitement','post','Calcul de TVA');
		input('text','prixHT','','Entrez un prix HT');
		echo "<br><br>";
		echo "TVA : ";
		radio('tva',$tabTVA);
		echo "<br><br>";
		submit('calcul','Calculer TVA');
		finForm();*/

		form('traitement','post','Calcul de TVA');
		input('text','prixHT','','Entrez un prix HT');
		echo "<br><br>";
		input('text','tauxTVA','','Entrez un taux de TVA');
		echo "<br><br>";
		submit('calcul','Calculer TVA');
		finForm();
	?>
</body>
</html>