<?php
	$motif="#([A-HJ-NP-TV-Z]{2})(\-)([0][\d][1-9]|[1-9][\d][\d])(\-)([A-HJ-NP-TV-Z]{2})#";
	$tab=array('IO-123-UO','AA-123-AA','AA-000-AA','AI-317-TL','TL-317-SE');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>