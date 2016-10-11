<!DOCTYPE html>
<html>
    <head>
        <title>FORMULAIRE</title>
    </head>
    <body>
        <form action="src/traitement.php" method="POST">
            <fieldset>
                <legend>Formulaire Personne</legend>
                Nom<br><input type="text" name="nom" placeholder="Entrez un Nom"><br><br>
                Prenom<br><input type="text" name="prenom" placeholder="Entrez un Prenom"><br><br>
                Ville<br><input type="text" name="ville" placeholder="Entrez une Ville"><br><br>
                Date de Naissance<br><input type="date" name="ddn" placeholder="Entrez une date de Naissance"><br><br>
                <input type="submit" name="valider" value="Envoyer">
            </fieldset>
        </form>
    </body>
</html>


<?php

    require_once ("src/personneDTO.php");
    
    /*$pers1 = new PersonneDTO("Jean", "Durant", "Oklahoma City", "1992-08-26");
    $pers1->insert();
    var_dump($pers1);
    $pers2 = new PersonneDTO("Billy", "Donovan", "Oklahoma City", "1989-08-26");
    $pers2->insert();
    $pers3 = new PersonneDTO("Russel", "Westbrook", "Oklahoma City", "1986-08-26");
    $pers3->insert();
    
    $pers4->insert();
    $pers5 = new PersonneDTO("Jordan", "Mike", "Oklahoma City", "1956-08-26");
    $pers5->update(11);
    
    $pers6 = new PersonneDTO("Bryant", "Kobe", "Los Angeles", "1978-08-26");
    //$pers6->insert();
    //$pers6->delete(13);
    
    echo $pers6->select(4);*/
    
?>
