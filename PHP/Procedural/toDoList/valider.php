<?php

session_start();
//session_destroy();
include('fonction.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>To Do List</title>
</head>
<body>

<?php

if(isset($_GET["valid"])){
		afficherListe($_SESSION["task"][$_GET["valid"]],"barre");

	}
	//var_dump($_SESSION["valid"]);
	header('location: index.php');
?>

</body>
</html>