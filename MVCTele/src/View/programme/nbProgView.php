<section>

    <h1> Nombre de programmes du jour par chaine</h1>
    <table>

        <?php
                echo "<tr>";
                echo "<th>Chaine</th>";
                echo "<th>Nb Prog</th> ";
                echo "<th>Date</th>";
                echo "</tr>";
            foreach($chaines as $chaineDTO){
                echo "<tr>";
                echo "<td><a href=\"#\" title=\"Afficher le détail\">" .
                    ucfirst($chaineDTO->getNomProgramme()) . "</a></td>";
                echo "<td>" . $chaineDTO->getNbProg() . "</td>";
                echo "<td>" . $chaineDTO->getDuree() . "</td>";
                echo "</tr>";
            }

        ?>

    </table>
    
</section>