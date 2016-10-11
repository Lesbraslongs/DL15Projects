<?php
	session_start();
	//session_destroy();
	include('fonction.php');
	$_SESSION['task']=array();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>To Do List</title>
</head>
<body>

		<h1>Bienvenue !</h1>
		<div class="formulaire">

			<form action="upload.php" method="post" enctype="multipart/form-data">
			    Select image to upload:
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input type="submit" value="Uploader Image" name="submit">
			</form>





		<?php
			/*//var_dump($_POST);
			//var_dump($_SESSION['task']);
			if(isset($_SESSION['error'])) {
				echo "ERREUR : ".$_SESSION['error'];
				unset($_SESSION['error']);
			}

			form('traitement','post','Ajouter une tache');
			input('texte','text','task','','Entrez une tâche');
			finFieldset();
			echo "<br>";
			submit('submit','ajouter','Ajouter Tâche');
			finForm();

			if (!isset($_SESSION['task'])) {
				echo ($_SESSION['error']);
				unset($_SESSION['error']);
			}*/
		?>
	</div>
	<div class="taches">
	<h2>Tâches</h2>
	<?php
			/*echo "<div class=\"divTache\">";
	  		echo "<ul>";
	  		foreach ($_SESSION['task'] as $key=>$task) {
	  			echo"<li class=\"tache\">$task <a class=\"supprimer\"href=\"supprimer.php?suppr=$key\">&#10008;</a><a class=\"valider\" href=\"valider.php?valid=$key\">&#10004;</a></li>";
	  		}
	  		echo "</ul>";
	  		echo "</div>";*/
	  		if (isset($_SESSION['file'])) {
	  			echo "<ul>";
		  		foreach ($_SESSION['file'] as $key => $value) {
		  			echo "<li><img src=\"$value\"></li>";
		  		}
		  		echo "</ul>";
	  		}

	?>
	</div>

</body>
</html>