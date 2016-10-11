<?php
	$motif="#^\D+$#";//[A-Z][a-z]*(-[A-Z][a-z]*?)
	$tab=array('jean','matthieu25','25','25matthieu','PAUL','paul25mathieu');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>