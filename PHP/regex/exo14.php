<?php
	$motif="#^[^-][1-9][0-9]*#";
	$tab=array('-5698','845465','-aed','aed');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>