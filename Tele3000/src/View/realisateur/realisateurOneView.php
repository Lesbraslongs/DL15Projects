<section>
    <h1> Info Realisateur</h1>

    <form action="index.php?ctrl=realisateur&action=modify&id=<?=$realisateur->getId()?>" method="post">
        <fieldset>
            <legend>Modifier une chaîne</legend>
            <input type="hidden" name="id" value="<?=$realisateur->getId()?>">
            <input type="text" name="nom" value="<?=$realisateur->getNomRealisateur()?>"/>

            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>