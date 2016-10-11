<?php
	$tab=array(1,2,5,10,31,40);
	$min=$max=1;
	for ($i=0; $i < count($tab); $i++) {
		if ($tab[$i] < $min) {
			$min=$tab[$i];
		}
		if ($tab[$i] > $max) {
			$max=$tab[$i];
		}
	}
	echo "plus grand écart du tableau : $min et $max";
?>