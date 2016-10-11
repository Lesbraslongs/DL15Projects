<?php
require_once("classes/livre.php"); //importation de la classe dont on a besoin
require_once("classes/individu.php");

require_once("classes/voiture.php");

$livre1 = new Livre(356,13,'Cendrillon et la mort des &eacute;toiles'); //instancie un objet
echo $livre1->infosLivre()."<br/>"; // utilisation de l'objet $livre1
$livre1->setNbrePages(12);
echo 'le livre 1 a maintenant:'.$livre1->getNbrePages().' pages <br/>';

$livre2 = new Livre(200,15,'Pas de titre');
echo $livre2->infosLivre()."<br/>";
$livre2->setTitreLivre("Une merveilleuse histoire du temps");
echo 'nouveau titre : '.$livre2->getTitreLivre()."<br/>";
$livre2->setNbreChapitres(8);
echo "Nouveau nombre de chapitres : ".$livre2->getNbreChapitres()."<br/>";
$livre2->setNbrePages(230);
echo $livre2->infosLivre()."<br>";

$cMax = new Voiture('Ford','C-max',2006,154200,'Diesel','Manuelle','bleue');
echo $cMax->infosVoiture();



?>
