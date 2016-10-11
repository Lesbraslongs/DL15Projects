 <?php
 	$tab=array(1,2,3,4,5);
 	$finTab=array();
 	$tabFinal=array();
 	for ($i=0; $i < count($tab); $i++) {
 		$finTab=array(end($tab));
 		$tabFinal=array_merge($finTab,$tab);
 	}
 	pre($tabFinal);
?>