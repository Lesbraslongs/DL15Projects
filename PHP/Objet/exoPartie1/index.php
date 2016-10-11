<?php
require_once("classes/livre.php"); //importation de la classe dont on a besoin.
require_once("classes/individu.php");

require_once("classes/formation.php");

//------------------PROGRAMME PRINCIPAL-------------------------

$livre1 = new Livre(356,13,'Cendrillon et la mort des etoiles'); //instancie un objet
echo $livre1->infosLivre()."<br/>"; // utilisation de l'objet $livre1

$livre2 = new Livre(400,8,'Une merveilleuse histoire du temps'); //instancie un objet
echo $livre2->infosLivre()."<br/>"; // utilisation de l'objet $livre1

$moi = new Individu('Amadou','Fatty');
echo $moi->infosIndividu()."<br>";

$voisin1 = new Individu('Kevin', 'Durant');
echo $voisin1->infosIndividu()."<br>";

$voisin2 = new Individu('Jack', 'Sparrow');
echo $voisin2->infosIndividu()."<br>";

$formation1 = new Formation(1,"2/12/2015","3/12/2015",14,"Modèle Objet","Bac+4","12371528","Alternance");
echo $formation1->infosTFormation();

$formation2 = new Formation(2,"4/12/2015","10/12/2015",70,"Modèle Objet","Bac+2","12323417","Initial");
echo $formation2->infosTFormation();

?>