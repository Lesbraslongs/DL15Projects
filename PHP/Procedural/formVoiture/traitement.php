<?php
	session_start();
	$_SESSION['login']=$_POST['nom'];
	$_SESSION['mdp']=$_POST['pwd1'];
	var_dump($_SESSION);

	include('pre.php');
	//pre($_POST);

	if (isset($_POST['nom'], $_POST['prenom'], $_POST['pwd1'], $_POST['pwd2'])) {
		$nom=htmlentities($_POST['nom']);
		$prenom=htmlentities($_POST['prenom']);
		$pwd1=htmlentities($_POST['pwd1']);
		$pwd2=htmlentities($_POST['pwd2']);

		if (!empty($_POST['nom']) && !empty($_POST['prenom'])) {
			echo "<br> Bienvenue ".$prenom." ".$nom." ! <br>";
		}else {
			header('Location: index.php?param=empty');
		}

		if (!empty($_POST['pwd1']) && !empty($_POST['pwd2'])) {
			if ($_POST['pwd1'] == $_POST['pwd2']) {
				echo "Password confirmé <br>";
			}else {
				header('Location: index.php?param=invalidPassword');
			}
		}else {
			header('Location: index.php?param=noPassword');
		}

		if (!empty($_POST['options'])) {
			$options=array();
			foreach ($_POST['options'] as $opt) {
				$options=htmlentities($opt);
				echo "$options ";
			}
		}

		if (!empty($_POST['auto'])) {
			$auto=htmlentities($_POST['auto']);

			switch ($auto) {
				case 'fiat':
					echo "Italiano";
					break;
				case 'audi':
					echo "Deutsche";
					break;
				case 'koenigsegg':
					echo "Swerige";
					break;
				case 'volvo':
					echo "Norway";
					break;
				case 'saab':
					echo "Swerige";
					break;
				case 'pagani':
					echo "tu pèse";
					break;
				default:
					echo "pas de caisse";
					break;
			}
		}

		$vehicule=array();
		foreach ($_POST['vehicule'] as $veh) {
			$vehicule=htmlentities($veh);
			pre($vehicule);
		}


	}else {
		header('Location: index.php?param=isset');
		pre($_POST);
	}



?>