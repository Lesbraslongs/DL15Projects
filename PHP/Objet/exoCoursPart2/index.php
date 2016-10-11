<?php
require_once("classes/stylo.php"); //importation de la classe dont on a besoin.

//------------------PROGRAMME PRINCIPAL-------------------------

$stylo1 = new Stylo('bleu') ; //instancie un objet
$stylo2 = new Stylo('blanc') ; //instancie un autre objet
$stylo3 = new Stylo('rouge') ; //instancie un autre objet
echo $stylo1->infosStylo(); // utilisation de l'objet $stylo1
echo $stylo2->infosStylo(); // utilisation de l'objet $stylo2
echo $stylo3->infosStylo(); // utilisation de l'objet $stylo3

?>