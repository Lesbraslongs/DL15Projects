<?php
require_once("plan.php");
require_once("etalage.php");
require_once("terrasse.php");
$terrasseA=new Terrasse("blanche",12,24);
// affiche la terrasse A et ses informations
echo "Les informations de la terrasse A sont : ".$terrasseA->affiche()."<br/>";
$terrasseB=new Terrasse("jaune",8,204);
$terrasseC=new Terrasse("rouge",102,4);
$etalageA=new Etalage("blanche",120,204);
// affiche l'etalage A et ses informations
echo "Les informations de l'&eacute;talage A sont : ".$etalageA->affiche()."<br/>";
$etalageB=new Etalage("violet",126,241);
$etalageC=new Etalage("bleu",812,214);
$plan=new plan("monPlan");
$plan->ajouteEmplacement($terrasseA);
$plan->ajouteEmplacement($terrasseB);
$plan->ajouteEmplacement($terrasseC);
$plan->ajouteEmplacement($etalageA);
$plan->ajouteEmplacement($etalageB);
$plan->ajouteEmplacement($etalageC);
$plan->supprimeEmplacement($etalageA);
echo $plan->affichePlan();
?>