<section>

    <h1> Acceder aux programmes par type de diffusion</h1>

        <?php
            foreach($types as $typeDTO){
                echo "<a href=\"index.php?ctrl=programme&action=type&id=".
                    $typeDTO->getId() ."\" title=\"Voir les programmes correspondants\"> <button>" .
                    ucfirst($typeDTO->getLibelle()) . "</button></a>";
            }

        ?>


</section>