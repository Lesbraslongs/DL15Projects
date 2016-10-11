<?php
	$motif="#(^[0]?[0-9]|^[1][0-9]|^[2][0-3]):[0-5][0-9]$#";
	$tab=array('25:52','256:50','21:568','17:45','00:00','17:00','24:60','31:31','29:52', '6:30');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>