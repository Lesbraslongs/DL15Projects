 <?php
 	$entiers=array(10,20);
 	$somme=0;
 	for ($i=0; $i < count($entiers); $i++) {
 		$somme+=$entiers[$i];
 	}
 	$moyenne=$somme/count($entiers);
 	echo "$moyenne";

 	// --------------ALTERNATIVE BIEN PLUS SIMPLE --------------

 	$moyenne=0;
 	$moyenne=array_sum($entiers)/count($entiers);
 	echo "$moyenne";
?>