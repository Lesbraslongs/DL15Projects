<?php
		$subjects = ["Algorithmie", "Merise", "SQL", "HTML", "PHP", "PDO"];
		$bool=true;
		$nbr=3;
		/*function showList($tabs){
			echo"<ul>";
			foreach ($tabs as $tab){
				echo "<li>".$tab."</li>";
			}
			echo"</ul>";
		}*/

		/*function showList($tabs,$duo=false){
			if ($duo==true) {
				echo"<ol>";
				foreach ($tabs as $tab){
					echo "<li>".$tab."</li>";
				}
				echo"</ol>";
			}else {
				echo"<ul>";
				foreach ($tabs as $tab){
					echo "<li>".$tab."</li>";
				}
				echo"</ul>";
			}
		}*/

		function showList($tabs,$duo=false,$nb=6){
					if (is_numeric($nb)) {
						if ($nb <= 0 ||$nb > count($tabs)) {
							echo "ERREUR : Taille de liste incorrecte";
						}else {
							echo ($duo)?"<ol>":"<ul>"; //ternaire pour afficher les elements communs aux deux "echo", à savoir le FOR
							for ($i=0; $i < $nb; $i++){
								echo '<li><a href="exo2.php?item='.$i.'">'.$tabs[$i].'</a></li>';
							}
							echo ($duo)?"</ol>":"</ul>";
						}
					}else {
						echo "ERREUR : veuillez entrez un nombre";
					}

		}

		//showList($subjects);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- FOR -->
	<p>FOR</p>
	<ul>
		<?php for ($i=0; $i < count($subjects) ; $i++): ?>
		<li><?= $subjects[$i];?></li>
		<?php endfor ?>
	</ul>
		<?php
		echo"<ul>";
			for ($i=0; $i < count($subjects); $i++) {
				echo"<li>$subjects[$i]</li>";
			}
		echo"</ul>";
	?>
<!-- FOREACH -->
	<p>FOREACH</p>
	<ul>
	<?php
		foreach ($subjects as $subject): ?>
		<li><?= $subject;?></li>
		<?php endforeach ?>
	</ul>

	<?php
		showList($subjects,$bool,$nbr);
	?>
</body>
</html>