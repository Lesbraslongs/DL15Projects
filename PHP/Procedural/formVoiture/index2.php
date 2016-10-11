<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titre</title>
</head>
<body>
	<h1>Premier formulaire</h1>

	<form action="traitement.php" method="post">
		<fieldset>
			<legend>Informations Personnelles</legend>
			  Nom :<br>
			  <input type="text" name="nom">
			  <br>

			  Prénom :<br>
			  <input type="text" name="prenom">
			  <br>
		</fieldset>
	  	<fieldset>
	  		<legend>Valider et Envoyer votre formulaire</legend>
	  		<input type="submit" value="Valider">
	  	</fieldset>
	</form>

	<p>If you click the "Submit" button, the form-data will be sent to a page called "traitement.php".</p>

</body>
</html>
