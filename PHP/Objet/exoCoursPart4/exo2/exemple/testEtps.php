<?php
require_once('Personne.php');
require_once('entreprise.php');
$rise = new Entreprise('Rise'); //création de l'entreprise
$am = new  Personne('Martineau'); //création du salarié
$ap = new  Personne('Parcte');
$rise->ajouteSalarie($am); //ajout du salarié à l'entreprise
$rise->ajouteSalarie($ap);
$am->estEmbauche($rise,'01/02/2008'); //ajout de l'entreprise au salarié
$ap->estEmbauche($rise,'01/02/2008');
echo $am->infos()."<br>";
echo $ap->infos()."<br>";
echo $rise->getInfos();
?>
