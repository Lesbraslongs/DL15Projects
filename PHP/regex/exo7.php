<?php
	$motif="#[aeiouy]#";//[aeiouy]/gi g pour global i pour insensible a la casse
	$tab=array('Jim','Jerry','Jeffrey','Joe','Bob','Jimmy','Joey','Jo','rfgthv');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>