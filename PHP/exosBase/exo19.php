<?php
	$nb=100;
	for ($i=2; $i <= $nb; $i++) {
		$nbDiv=0;
		for ($j=1; $j <= $i ; $j++) { 
			if ($i%$j == 0) {
				$nbDiv++;
		}
		}
		if ($nbDiv==2) {
			echo "$i, ";
		}
	}
?>