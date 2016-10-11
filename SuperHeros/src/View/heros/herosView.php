<section>

    <h1> liste des Super Heros</h1>
    <table>

        <?php
        
            foreach($heros as $herosDTO){
                echo "<tr>";
                echo "<td><a href=\"index.php?id=".
                    $herosDTO->getId() ."\" title=\"Afficher le détail\">" .
                    ucfirst($herosDTO->getNom()) . "</a></td>";
                echo "<td>" . $herosDTO->getPouvoir() . "</td>";
                echo "<td>" . $herosDTO->getTypePerso() . "</td>";
                echo "</tr>";
            }

        ?>

    </table>


    <form action="index.php?id=-1" method="post">
        <fieldset>
            <legend>Ajout d'un nouveau superhéros</legend>
            <input type="text" name="nom" placeholder="Nom du Super Heros"/>
            <input type="text" name="pouvoir" placeholder="Pouvoir"/>
            <input type="text" name="typePerso" placeholder="Type Personnage"/>
            <input type="submit" value="Soumettre" />
        </fieldset>
    </form>

</section>