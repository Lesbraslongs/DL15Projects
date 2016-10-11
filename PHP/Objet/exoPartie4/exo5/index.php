<?php
require_once("etape.php");
require_once("planningjournee.php");
require_once("miniexcursionplanifiee.php");
require_once("miniexcursion.php");
//require_once("MiniExcursionPayante.php");
require_once("miniexcursionpayante.php");

$testDuneEtapeSeule=new Etape("Le chemin du PHP",128);

echo "L'etape nommee ".$testDuneEtapeSeule->getDescriptionPrevue()." a une duree egale a : ".$testDuneEtapeSeule->donneDureePrevueHHMM();

$maMiniExc=new MiniExcursion("le parcours PHP objet", 15,[new Etape("Le chemin du PHP",128),new Etape("Le sentier objet",112),new Etape("Le ravin UML",28)]);
echo "<br/>";

echo "La mini excursion nommee ".$maMiniExc->getLibelleMiniExcursion()." a une duree egale a : ".$maMiniExc->donneDureePrevueHHMM();

$maMiniExcPay=new MiniExcursionPayante("le parcours PHP objet extraordinaire", 15,[new Etape("Le chemin du PHP tres beau",30),new Etape("Le merveilleux sentier objet",30),new Etape("Le canyon UML ",30)],1240);
echo "<br/>";

echo "La mini excursion payante nommee ".$maMiniExcPay->getLibelleMiniExcursion()." a une duree egale a : ".$maMiniExcPay->donneDureePrevueHHMM(). " et coute: ".$maMiniExcPay->getTarif()." euros";

$maMiniExcPlanifA=new MiniExcursionPlanifiee("8h15",15,$maMiniExcPay);
echo "<br/>";

if ($maMiniExcPlanifA->estComplete()==true) {
	echo "La mini excursion planifiee est compl&egrave;te";
	}
	else {
	echo "Il reste des places pour la mini excursion planifiee";
	}

$maMiniExcPlanifB=new MiniExcursionPlanifiee("8h15",14,$maMiniExc);

$monPlanningJournee=new PlanningJournee(date("d/m/y"),[$maMiniExcPlanifA,$maMiniExcPlanifB]);
echo "<br/>";

echo "Le planning de la journee :".$monPlanningJournee->getDate()." aura pour excursion(s):";
echo "<ul>";

foreach($monPlanningJournee->getLesMiniExcursionsPlanifiees() as $miniExc) {
	echo"<li>".$miniExc->getLaMiniExcursion()->getLibelleMiniExcursion()." a une duree egale a : ".$miniExc->getLaMiniExcursion()->donneDureePrevueHHMM()."</li>";
}
echo "</ul>";
?>