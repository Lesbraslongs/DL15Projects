<?php
	function multiTable($nb1,$nb2){
		echo '<table border="1px solid">';
		for ($i=1; $i <= $nb2; $i++) {
			echo "<tr>";
			if ($i==1) {
				echo "<th>&nbsp;</th>";
			}else {
				echo "<th>$i</th>";
			}

			for ($j=$nb1; $j <=$nb2 ; $j++) {
				if ($i==1) {
					echo "<th>$j</th>";
				}else {
					echo "<td>".($i*$j)."</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	multiTable(2,9);
?>
