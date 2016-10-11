 <?php
 	echo "<br/>";
 	$nb=6;
 	for ($i=1; $i <= $nb; $i++) {
 		for ($j=$nb; $j >= $i ; $j--) {
 			echo "&nbsp;";
 		}
 		for ($k=1; $k <= $i; $k++) {
 			echo "* ";
 		}
 		echo "<br/>";
 	}
?>