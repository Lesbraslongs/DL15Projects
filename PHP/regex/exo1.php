<?php
	$motif="#\w+.od[tps]{1}#";
	$tab=array('fichier1.odt', 'fichier', '.odt', 'file.fr', 'fich_1.odp','fichh=1.ods','text.pdf');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>