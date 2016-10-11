<section>

    <h1> liste des programmations</h1>
    <table>

        <?php

            foreach($programmations as $programmationDTO){
                echo "<tr>";
                echo "<td><a href=\"index.php?ctrl=programmation&action=detail&id=".
                    $programmationDTO->getId() ."\" title=\"Afficher le détail\">" .
                    ucfirst($programmationDTO->getNomProgrammation()) . "</a></td>";
                echo "<td>" . $programmationDTO->getDate() . "</td>";
                echo "<td>" . $programmationDTO->getHeure() . "</td>";
                echo "<td><a href=\"index.php?ctrl=programmation&action=del&id=" .
                    $programmationDTO->getId() . "\">X</a></td>";
                echo "</tr>";
            }

        ?>

    </table>


    <form action="index.php?ctrl=programmation&action=add&id=-1" method="post">
        <fieldset>
            <legend>Ajout d'un nouveau programmation</legend>
            <input type="text" name="nom" placeholder="Nom de la programmation"/>
            <input type="text" name="date" placeholder="Date"/>
            <input type="text" name="heure" placeholder="heure"/>
            
            <input type="submit" value="Soumettre" />
        </fieldset>
    </form>

</section>