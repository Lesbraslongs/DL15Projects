<?php
	$motif="#^[A-Z]+#";
	$tab=array('Bonjour','bonjour','R546589','rFDQDQSFS','5R545sqd','r','R');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>