<?php
	require_once("stylo.php");
	try {
	$stylo1 = new stylo("abcdef","rouge",20,250);
	echo $stylo1->infoStylo();
	}
	catch (Exception $e) {
		echo "Caught exception : " . $e->getMessage();
	}
?>