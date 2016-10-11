<?php
	$motif="#^\d{4,8}#";
	$tab=array('2222','256','2','22','2326589','56987456','258964789652','54689');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>