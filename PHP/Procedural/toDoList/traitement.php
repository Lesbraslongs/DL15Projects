<?php
	session_start();
	//session_destroy();
	//include('fonction.php');
//var_dump($_POST);
	//$_SESSION['task']=array();

	if (isset($_POST['task'])) {
		if (empty($_POST['task'])) {
			$_SESSION['error']='Veuillez entrer une tache';
		}else {
			//foreach ($_SESSION['task'] as $_SESSION['tache']) {
				$_SESSION['task'][]=htmlentities($_POST['task']);
			//}
		}




	}
	header('location: index.php');
?>