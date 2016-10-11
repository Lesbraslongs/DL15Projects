<?php $bool=true; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.php">
	<title>Titre</title>
</head>
<body>
	<style>
		.success{background-color : red; font-weight : bold;}
		.alert{background-color : green; font-weight : normal}
	</style>

	<p class="<?php if($bool){echo "success";}else{echo "alert";} ?>">sdflknqnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn;,sdfknslkdqsdk,qsd skd
	</p>
	<p class="<?= $bool ? "success" : "alert"; ?>">sdflknqnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn;,sdfknslkdqsdk,qsd skd
	</p>
</body>
</html>

