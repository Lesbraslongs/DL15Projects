<?php
header("Content-Type: text/html; charset=UTF-8");
require_once("individu.php");
require_once("salarie.php");
// --- Instantiation d'un objet et utilisation
$am = new Individu("Martineau","Aurélien");
echo "Cet individu est ".$am->getNom()." ".$am->getPrenom();
$nm = new Salarie("Martineau","Noémie",78000);
echo "Cet individu est ".$nm->getNom()." ".$nm->getPrenom()." et gagne ".$nm->getSalaire()." euros";
?>