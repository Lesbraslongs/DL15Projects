<?php
	$countries = array(
		"France" => array("Paris","Lyon","Marseille","Nantes","Lille"),
		"Allemagne" => array("Berlin","Hambourg","Hanovre","Munich","Cologne"),
		"Espagne" => array("Madrid","Bilbao","Grenade","Barcelone","Séville")
	);

	function showTable($tab) {
		echo '<table border="1px solid">';
		foreach ($tab as $pays=>$ville) {
						echo "<tr>";
						echo"<th>$pays</th>";
						foreach ($ville as $city) {
							echo "<td>$city</td>";
						}
						echo "</tr>";
				}
		echo'</table>';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tab Pays</title>
</head>
<body>
			<?php
				showTable($countries);
			?>
</body>
</html>

<?php
//--------------------------PREMIERE VERSION--------------
/*<table border="1px solid">
			<?php
				foreach ($countries as $pays=>$ville) {
						echo "<tr>";
						echo"<th>$pays</th>";
						foreach ($ville as $city) {
							echo "<td>$city</td>";
						}
						echo "</tr>";
				}
			?>
	</table> */
?>