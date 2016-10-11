<?php
	session_start();
	var_dump($_SESSION);
?>


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
			  <input type="text" name="nom" value="">
			  <br>

			  Prénom :<br>
			  <input type="text" name="prenom" value="">
			  <br>

				Vous Etes :<br>
  				<input type="radio" name="sexe" value="homme" checked> Un Homme
  				<input type="radio" name="sexe" value="femme"> Une Femme
  				<input type="radio" name="sexe" value="lesDeux"> Les deux <br>

			  Mot de Passe : <br>
			  <input type="password" name="pwd1">
				<br>

			  Confirmer Mot de Passe : <br>
			  <input type="password" name="pwd2">
			  <br>
	  	</fieldset>
	  	<fieldset>
	  		<legend>Votre Véhicule</legend>
	  		<select name="auto">
  				<option value="volvo">Volvo</option>
  				<option value="saab">Saab</option>
  				<option value="fiat">Fiat</option>
  				<option value="audi">Audi</option>
  				<option value="pagani">Pagani</option>
  				<option value="koenigsegg">Koenigsegg</option>
			</select><br>
			Vos options <br>
			<select multiple name="options[]">
  				<option value="4roues">4 roues motrices</option>
  				<option value="cuir">Interieur Cuir</option>
  				<option value="chrome">Contours Chromés</option>
  				<option value="v12">V12 bi-Turbo</option>
  				<option value="gps">GPS Parrot</option>
			</select> <br>
			Autres véhicules : <br>
  				<input type="checkbox" name="vehicule[]" value="Moto">moto<br>
  				<input type="checkbox" name="vehicule[]" value="Scooter">Scooter<br>
  				<input type="checkbox" name="vehicule[]" value="Car">Tricyle (Type mp3) <br>
	  	</fieldset>
	  	<fieldset>
	  		<legend>Valider et Envoyer votre formulaire</legend>
	  		<input type="submit" value="Valider">
	  	</fieldset>
	</form>

	<p>If you click the "Submit" button, the form-data will be sent to a page called "traitement.php".</p>

</body>
</html>
