<?php
	$nb=3456;
	//echo($nb%10);
	for ($i=0; $i <= $nb; $i++) {
		$rev=$nb%10;
		$nb=$nb/10;
		echo($rev);
	}
?>