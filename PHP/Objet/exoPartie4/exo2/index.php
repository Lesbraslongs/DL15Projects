<?php
require_once("individu.php");
require_once("voiture.php");
$proprio = new Individu ("Jean", "Michel");
$voiture = new Voiture ("2546846","TL-317-SE","Renault","Grise","2008",$proprio);
echo $voiture->getInfos();

?>