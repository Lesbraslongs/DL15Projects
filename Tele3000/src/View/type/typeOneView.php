<section>
    <h1> Info Realisateur</h1>

    <form action="index.php?ctrl=type&action=modify&id=<?=$type->getId()?>" method="post">
        <fieldset>
            <legend>Modifier une chaîne</legend>
            <input type="hidden" name="id" value="<?=$type->getId()?>">
            <input type="text" name="libelle" value="<?=$type->getLibelle()?>"/>

            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>