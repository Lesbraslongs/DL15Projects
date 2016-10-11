<?php
	$motif="#.{1,9}#";
	$tab=array('0123456789','abcdefghij','jlqkjds','j','kljksqflkslqkflqsf','02586');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>