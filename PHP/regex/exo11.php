<?php
	$motif="#(^[1][0-2]|^[0]?[0-9]):[0-5][0-9][ap]m$#";
	$tab=array('25:52pm','256:50','21:568','17:45','00:00pm','17:00','24:60','31:31','9:00pm','6:35am','19:20am','120:20pm','12:360am');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>