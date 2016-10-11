<?php
	$motif="#^(Jim)$|^(Joe)$#";//J(im|oe)
	$tab=array('Jim','Jerry','Jeffrey','Joe','Bob','Jimmy','Joey','Jo');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>