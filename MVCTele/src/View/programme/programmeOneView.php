<section>
    <h1> Info Programmes</h1>

    <form action="index.php?ctrl=programme&action=modify&id=<?=$programme->getId()?>" method="post">
        <fieldset>
            <legend>Modifier un programme</legend>
            <input type="hidden" name="id" value="<?=$programme->getId()?>">
            <input type="text" name="nom" value="<?=$programme->getNom()?>"/>
            <input type="text" name="duree" value="<?=$programme->getDuree()?>"/>
            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>