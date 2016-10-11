<?php
session_start();
//session_destroy();
var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Acteurs Realisateurs</title>
</head>
<body>
	<form action="traitement.php" method="post" accept-charset="utf-8">
		<fieldset>
			<legend>Saisie Artiste</legend>
			<input type="text" name="prenom" value="" placeholder="Prenom">
			<input type="text" name="nom" value="" placeholder="Nom">
			<input type="text" name="film" value="" placeholder="Nom du film">
			<input type="text" name="cachet" value="" placeholder="Montant du cachet">
			<input type="submit" name="valider" value="Valider">
		</fieldset>
	</form>
</body>
</html>