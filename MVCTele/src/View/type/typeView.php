<section>

    <h1> liste des Types</h1>
    <table>

        <?php

            foreach($types as $typeDTO){
                echo "<tr>";
                echo "<td><a href=\"index.php?ctrl=type&action=detail&id=".
                    $typeDTO->getId() ."\" title=\"Afficher le détail\">" .
                    ucfirst($typeDTO->getLibelle()) . "</a></td>";
                
                echo "<td><a href=\"index.php?ctrl=type&action=del&id=" .
                    $typeDTO->getId() . "\">X</a></td>";
                echo "</tr>";
            }

        ?>

    </table>


    <form action="index.php?ctrl=type&action=add&id=-1" method="post">
        <fieldset>
            <legend>Ajout d'un nouveau type</legend>
            <input type="text" name="libelle" placeholder="Nom du type"/>
            <input type="submit" value="Soumettre" />
        </fieldset>
    </form>

</section>