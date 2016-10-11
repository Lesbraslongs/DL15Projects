<?php
require_once("livre.php");
require_once("individu.php");

$steph = new Individu(" Stephen","Hawking");
$livre = new Livre(162,7,"Petite histoire de l'univers",$steph);
echo $livre->infosLivre();
?>