<?php

$valeur = rand(0,10000);


$i = 0;
$time_start = microtime(true);

while ($i != $valeur) {
	$i++;
	$time_end = microtime(true);
}


$time = $time_end - $time_start;

echo "nombre aléatoire : ".$valeur."<br/>";
echo "temps écoulé : ". $time . " secondes";


?>