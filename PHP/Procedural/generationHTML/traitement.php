<?php
	//--------------------VERSION TAUX AFFICHES----------------------
	/*if (isset($_POST['prixHT'], $_POST['tva'])) {
		$prixHT=htmlentities($_POST['prixHT']);
		$tva=strip_tags($_POST['tva']);

		switch ($tva) {

			case '5.5%':
				echo "PRIX TTC : $prixHT * $tva = ".(($prixHT*0.055)+$prixHT)." €";
				break;

			case '8.5%':
				echo "PRIX TTC : $prixHT * $tva = ".(($prixHT*0.085)+$prixHT)." €";
				break;

			case '10%':
				echo "PRIX TTC : $prixHT * $tva = ".(($prixHT*0.1)+$prixHT)." €";
				break;

			case '20%':
				echo "PRIX TTC : $prixHT * $tva = ".(($prixHT*0.2)+$prixHT)." €";
				break;

			default:
				echo "operation impossible";
				break;
		}
	}*/

	if (isset($_POST['prixHT'], $_POST['tauxTVA'])) {

		$prixHT=htmlentities($_POST['prixHT']);
		$tva=htmlentities($_POST['tauxTVA']);
		$tvaCent=$tva/100;

		if (!is_numeric($prixHT) || !is_numeric($tva)) {
			echo "Veuillez entrez un nombre";
		}else{
			echo "Prix TTC  = $prixHT * $tva = " . (($prixHT*$tvaCent)+$prixHT) . " €";
			echo "<br><br>";
			echo "Montant de la TVA : " . ($prixHT*$tvaCent) . " €";
		}
	}
?>