<?php
require_once('Personne.php') ;
require_once('Entreprise.php') ;
$rise = new Entreprise('Rise') ; //création de l'entreprise
$am = new Personne('Martineau') ; //création du salarié
$rise->ajouteSalarie($am); //ajout du salarié à l'entreprise
$am->estEmbauche($rise,'01/02/2008') ; //ajout de l'entreprise au salarié

?>