<?php
	$tab=array(1,2,3,4,5,6,7,8,9);
	$flag=true;
	for ($i=0; $i < count($tab); $i++) {
		$moinsUn=$i-1;
		if ($tab[$i] != $tab[$moinsUn]+1) {
			$flag=false;
		}
	}
	if ($flag) {
		echo "nombres consecutifs";
	}else {
		echo "nombres non consecutifs";
	}
?>

