<?php
require_once('personne.php') ;
require_once('compte.php') ;
$am = new Personne('Martineau','Aurélien','26/12/1992') ; //création du propriétaire du compte
$unCompte = new Compte('000324567',$am,30000) ; // création du compte

echo $unCompte->getInfos();

?>