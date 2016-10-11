<section>

    <h1> liste des programmes</h1>
    <table>

        <?php
            
            //$count = array_pop($programmes);
            //var_dump($programmes);
            //echo "Nombre de programmes : " . $count['somme'];
            $dureeMoy = array_pop($programmes);
            //var_dump($dureeMoy);
            echo "Durée Moyenne des programmes : " . $dureeMoy["moyenne"] . " Minutes";
            foreach($programmes as $programmeDTO){
                echo "<tr>";
                echo "<td><a href=\"index.php?ctrl=programme&action=detail&id=".
                    $programmeDTO->getId() ."\" title=\"Afficher le détail\">" .
                    ucfirst($programmeDTO->getNomProgramme()) . "</a></td>";
                echo "<td> de : " . ucwords($programmeDTO->getIdReal()) . "</td>";
                echo "<td>" . $programmeDTO->getDuree() . " minutes</td>";
                echo "<td><a href=\"index.php?ctrl=programme&action=del&id=" .
                    $programmeDTO->getId() . "\">X</a></td>";
                echo "</tr>";
            }

        ?>

    </table>


    <form action="index.php?ctrl=programme&action=add&id=-1" method="post">
        <fieldset>
            <legend>Ajout d'un nouveau programme</legend>
            <input type="text" name="nom" placeholder="Nom du programme"/>
            <input type="text" name="duree" placeholder="Durée"/>
            <input type="submit" value="Soumettre" />
        </fieldset>
    </form>

</section>