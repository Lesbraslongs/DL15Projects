<?php
require_once("intervenant.php");
require_once("mission.php");
require_once("projet.php");

$am= new Intervenant("Martineau",888.80);
$gb= new Intervenant("Block",2.18);

$mission=new Mission("Prog objet","C'est un truc de fou",35,$am);
$mission->AjoutReleve("10/12/2015",3);
$mission->AjoutReleve("11/12/2015",20);
$mission->AjoutReleve("12/12/2015",18);

$mission2=new Mission("Javascript","C'est un truc de fou",35,$gb);
$mission2->AjoutReleve("15/12/2015",30);
$mission2->AjoutReleve("16/12/2015",18);
$mission2->AjoutReleve("17/12/2015",12);

$tabMissions=array($mission,$mission2);

$formationDl=new Projet("Formation DL","5/12/2015","20/12/2015",40000,$tabMissions);

echo "La marge brute courante du projet est de :".$formationDl->margeBruteCourante()."€";
?>