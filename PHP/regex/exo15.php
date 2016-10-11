<?php
	$motif="#[1-9]\d*|0#";
	$tab=array('0','54665',-464);
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>