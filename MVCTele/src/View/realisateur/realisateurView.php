<section>

    <h1> liste des realisateurs</h1>
    <table>

        <?php

            foreach($realisateurs as $realisateurDTO){
                echo "<tr>";
                echo "<td><a href=\"index.php?ctrl=realisateur&action=detail&id=".
                    $realisateurDTO->getId() ."\" title=\"Afficher le détail\">" .
                    ucfirst($realisateurDTO->getNomRealisateur()) . "</a></td>";
                
                echo "<td><a href=\"index.php?ctrl=realisateur&action=del&id=" .
                    $realisateurDTO->getId() . "\">X</a></td>";
                echo "</tr>";
            }

        ?>

    </table>


    <form action="index.php?ctrl=realisateur&action=add&id=-1" method="post">
        <fieldset>
            <legend>Ajout d'un nouveau realisateur</legend>
            <input type="text" name="nom" placeholder="Nom du realisateur"/>
            <input type="submit" value="Soumettre" />
        </fieldset>
    </form>

</section>