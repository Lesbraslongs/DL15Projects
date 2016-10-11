<?php
require_once("personne.php");
require_once("ville.php");
//require_once("formatage.php");

$moi = new Personne("Amadou","26/08/1992",2500.58);
$portet = new Ville(31770,"portet sur garonne");

echo $moi->getInfos();
echo $portet->infosVille();
?>