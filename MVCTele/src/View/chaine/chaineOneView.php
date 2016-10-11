<section>
    <h1> Info Chaine</h1>

    <form action="index.php?ctrl=chaine&action=modify&id=<?=$chaine->getId()?>" method="post">
        <fieldset>
            <legend>Modifier une chaîne</legend>
            <input type="hidden" name="id" value="<?=$chaine->getId()?>">
            <input type="text" name="nom" value="<?=$chaine->getNom()?>"/>
            <input type="text" name="adresse" value="<?=$chaine->getAdresse()?>"/>
            <input type="text" name="cp" value="<?=$chaine->getCp()?>"/>
            <input type="text" name="ville" value="<?=$chaine->getVille()?>"/>
            <input type="text" name="tel" value="<?=$chaine->getTel()?>"/>
            <input type="text" name="fax" value="<?=$chaine->getFax()?>"/>
            <fieldset id="minifs">
                <legend>Chaîne cablée?</legend>
                <label for="cable1">Oui</label>
                <input type="radio" name="cable" id="cable1" value="1"
                    <?php if($chaine->getPayant()==1){ echo("checked");} ?>/>
                <label for="cable2">Non</label>
                <input type="radio" name="cable" id="cable2" value="0"
                        <?php if($chaine->getPayant()==0){ echo("checked");}?>/>
            </fieldset>
            <input type="submit" value="Modifier" />
        </fieldset>
    </form>

</section>