<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
 	for ($i=0; $i <= 100; $i++) {
 		echo $i." ";
 	}
 	echo "<br/><br/>";

 	$i=0;
 	while ( $i <= 100) {
 		echo $i." ";
 		$i++;
 	}
	echo "<br/><br/>";

 	$i=0;
 	do {
 		echo $i." ";
 		$i++;
 	}while ($i <= 100)
?>
</body>
</html>