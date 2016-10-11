 <?php
 	function conjuguerPremierGroupe ($verbe) {
 		$baseVerbe = substr($verbe,0,strlen($verbe)-2);
 		$term = array('ais', 'ais','ait', 'ions', 'iez','aient');
 		$pronom = array('je','tu','il','nous','vous','ils');
 		for ($i=0; $i <= 5; $i++) {
 			echo $pronom[$i]." ".$baseVerbe.$term[$i]." ";
 		}
 	}
 	$verb="Chanter";
 	conjuguerPremierGroupe($verb);
?>
