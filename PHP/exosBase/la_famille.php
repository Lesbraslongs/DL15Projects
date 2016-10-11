<?php
/* Voici un extrait de contenu du fichier gÃ©nÃ©alogique rÃ©cupÃ©rÃ© par un notaire dans une base de donnÃ©es. Malheureusement l'extraction a Ã©tÃ© faite rapidement et il ne reste aucune note de la personne qui a mis la base de donnÃ©es en place.
Le notaire vous embauche pour deux jours afin de lui fournir des scripts qui lui permettront "d'Ã©plucher" les donnÃ©es ci-contre.

Le notaire vous demande pour travailler sur les liens et informations des gens certaines fonctionnalitÃ©s.
Elles sont les suivantes:
1- DÃ©finir les couples.
2- Indiquer s'ils sont mariÃ©s ou concubins.
3- Retrouver les personnes cÃ©libataires et l'indiquer.
4- Indiquer les parents d'une personne, ou si elle n'en a pas.
5- Indiquer les frÃ¨res et soeurs d'une personne, ou si elle n'en a pas.
6- Indiquer la "place" de chacun dans une fratrie( ainÃ©, cadet, etc...).
7- Afficher les familles avec un semblant d'ordre gÃ©nÃ©alogique (dÃ©calages/indentation).
8- Indiquer le plus grand Ã©cart d'Ã¢ges entre les membres d'une mÃªme famille.
9- Ecrire la civilitÃ© en toutes lettres.

Il s'agira de mettre un maximum ces donnÃ©es avec du texte pour une lecture plus simple ( par exemple: Untel "est le frÃ¨re" d'Unetelle).

Il est obligatoire de passer par des boucles for, foreach et/ou while.
En effet le neveu du notaire qui vient faire son stage de 3Ã¨me dans l'Ã©tude de son oncle la semaine prochaine, connait un peu le php mais ne connait pas les fonctions natives du langage. Il vous faut donc commenter votre code.

Il va reprendre votre travail pour le mettre en forme avec du html et du css pour offrir une interface conviviale.
Il sait par contre faire des fonctions "mÃ©tier", et a hÃ¢te d'aprÃ¨s son tonton de voir les fonctions Ã©crites par un vrai dÃ©veloppeur.

Vous pouvez proposer une fois finis, les mÃªmes scripts avec des fonctions natives php; la proposition de ce petit "plus" pourrait dÃ©boucher sur un autre contrat avec le notaire.*/
$laFamille = array(
	array('Id' => 256, 'Civilite' => 1, 'Nom' => 'Le Quemener', 'Prenom' => 'Jean-Michel', 'Age' => 78, 'Parents' => array() , 'Fratrie' => array(654) ),
	array('Id' => 267, 'Civilite' => 2, 'Nom' => 'Le Quemener', 'Prenom' => 'Josiane', 'Age' => 76, 'Parents' => array() , 'Fratrie' => array() ) ,
	array('Id' => 723, 'Civilite' => 1, 'Nom' => 'Le Quemener', 'Prenom' => 'Jean-François', 'Age' => 45, 'Parents' => array(256,267), 'Fratrie' => array(724,802) ) ,
	array('Id' => 724, 'Civilite' => 2, 'Nom' => 'Le Quemener', 'Prenom' => 'Claude', 'Age' => 43, 'Parents' => array(256,267), 'Fratrie' => array(723,802) ) ,
	array('Id' => 654, 'Civilite' => 2, 'Nom' => 'Le Quemener', 'Prenom' => 'Corinne', 'Age' => 75, 'Parents' => array() , 'Fratrie' => array(256) ) ,
	array('Id' => 677, 'Civilite' => 1, 'Nom' => 'Bachir', 'Prenom' => 'Elias', 'Age' => 37, 'Parents' => array(621,635), 'Fratrie' => array(680) ) ,
	array('Id' => 677, 'Civilite' => 1, 'Nom' => 'Bachir', 'Prenom' => 'Elias', 'Age' => 37, 'Parents' => array(621,632), 'Fratrie' => array(680) ) ,
	array('Id' => 621, 'Civilite' => 1, 'Nom' => 'Bachir', 'Prenom' => 'Brahim', 'Age' => 65, 'Parents' => array(802,789), 'Fratrie' => array() ) ,
	array('Id' => 680, 'Civilite' => 1, 'Nom' => 'Bachir', 'Prenom' => 'Sebastien', 'Age' => 34, 'Parents' => array(621,635), 'Fratrie' => array(677) ) ,
	array('Id' => 717, 'Civilite' => 2, 'Nom' => 'Bachir', 'Prenom' => 'Magdalena', 'Age' => 7, 'Parents' => array(677,711), 'Fratrie' => array() ),
	array('Id' => 802, 'Civilite' => 2, 'Nom' => 'Dumont', 'Prenom' => 'Claudine', 'Age' => 48, 'Parents' => array() , 'Fratrie' => array(723,724), ) ,
	array('Id' => 789, 'Civilite' => 1, 'Nom' => 'Dumont', 'Prenom' => 'Erwann', 'Age' => 49, 'Parents' => array() , 'Fratrie' => array() ) ,
	array('Id' => 934, 'Civilite' => 1, 'Nom' => 'Dumont', 'Prenom' => 'Jean-FranÃ§ois', 'Age' => 19, 'Parents' => array(802,789), 'Fratrie' => array(944,948) ) ,
	array('Id' => 944, 'Civilite' => 2, 'Nom' => 'Dumont', 'Prenom' => 'Emilie', 'Age' => 17, 'Parents' => array(802,789), 'Fratrie' => array(934,948) ) ,
	array('Id' => 948, 'Civilite' => 2, 'Nom' => 'Dumont', 'Prenom' => 'Agathe', 'Age' => 13, 'Parents' => array(802,789), 'Fratrie' => array(934,944) ) ,
	array('Id' => 635, 'Civilite' => 2, 'Nom' => 'Guedon', 'Prenom' => 'Estelle', 'Age' => 66, 'Parents' => array() , 'Fratrie' => array() ) ,
	array('Id' => 711, 'Civilite' => 2, 'Nom' => 'Bazo', 'Prenom' => 'Eva', 'Age' => 37, 'Parents' => array() , 'Fratrie' => array() )
);
?>