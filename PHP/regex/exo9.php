<?php
	$motif="#^\#([0-9A-Fa-f]{3}|[0-9A-Fa-f]{6})#";
	$tab=array('#aaaaaa','#985R68',"#985r68",'#987d98','#987D98','#E67F78','#aaa');
	for ($i=0; $i < count($tab); $i++) {

		if (preg_match($motif,$tab[$i])) {
			echo $tab[$i]." est OK <br>";
		}else {
			echo $tab[$i]." n'est pas OK <br>";
		}
	}

?>