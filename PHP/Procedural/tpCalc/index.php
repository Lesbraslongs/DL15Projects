<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculatrice</title>
</head>
<body>
	<?php if(isset($_SESSION['error'])) {
		echo "Des erreurs sont apparues : ".$_SESSION['error'];
		unset($_SESSION['error']);
	}
	?>
	<form action="calcul.php" method="post">
		<fieldset>
			<legend>Ma calculatrice perso</legend>
			<input type="text" name="nb1" placeholder="Saisissez ici un nombre">
			<select name="op">
				<option value="plus">+</option>
				<option value="moins">-</option>
				<option value="mult">x</option>
				<option value="div">/</option>
			</select>
			<input type="text" name="nb2" placeholder="Saisissez ici un nombre">
			<input type="submit" name="calculer" value="Calculer">
		</fieldset>
	</form>

	<?php
	if(isset($_SESSION["res"])){
     	echo $_SESSION["res"];
      	unset($_SESSION["res"]);
      }
    ?>
</body>
</html>