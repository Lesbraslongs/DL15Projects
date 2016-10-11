<?php
//----------FONTION AFFICHAGE TABLEAU------------
	function pre($tab) {
		echo '<pre>';
			var_dump($tab);
		echo'</pre>';
	}
//----------FONTION AFFICHAGE TABLEAU------------
include 'la_famille.php';
/*function couple ($tab) {
	$tab=array();
	$duo=array();
	foreach ($tab as $cle => $duo) {
		return var_dump($duo);
	}
	//return echo $couple[0]." est en couple avec ". $couple[1];
}

couple($laFamille);*/
foreach ($laFamille as $fami) {
		if ($fami['Parents'] != null) {
			echo $fami['Parents'][0]." est en couple avec ".$fami['Parents'][1]."<br/>";
		//echo $fami['Nom']." ".$fami['Prenom']." est en couple avec ".$fami[$j]['Nom']." ".$fami['Prenom']."<br/>";
		}
}

?>