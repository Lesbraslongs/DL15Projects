<?php
// --- profEleveTest.php
require_once("prof.php");
require_once("eleve.php");
$prof = new prof("Tequiero","Raoul","Espagnol");
$eleve = new eleve("Lucas", "Linda", "Licence");
echo $prof->getInfos()."<br />";
echo $eleve->getInfos();
?>