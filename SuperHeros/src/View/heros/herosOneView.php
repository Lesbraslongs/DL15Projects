<section>
    <h1> Info Super Heros</h1>

    <form action="index.php?id=<?=$heros->getId()?>" method="post">
        <fieldset>
            <legend>Modifier un Super Heros</legend>
            <input type="hidden" name="id" value="<?=$heros->getId()?>">
            <input type="text" name="nom" value="<?=$heros->getNom()?>"/>
            <input type="text" name="pouvoir" value="<?=$heros->getPouvoir()?>"/>
            <input type="text" name="typePerso" value="<?=$heros->getTypePerso()?>"/>
            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>