<section>
    <h1> Info Programmations</h1>

    <form action="index.php?ctrl=programmation&action=modify&id=<?=$programmation->getId()?>" method="post">
        <fieldset>
            <legend>Modifier une programmation</legend>
            <input type="hidden" name="id" value="<?=$programmation->getId()?>">
            <input type="text" name="nom" value="<?=$programmation->getNom()?>"/>
            <input type="text" name="date" value="<?=$programmation->getDuree()?>"/>
            <input type="text" name="heure" value="<?=$programmation->getDuree()?>"/>
            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>