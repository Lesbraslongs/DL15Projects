<?php
require('form.php');
require('acteur.php');
require('realisateur.php');
$form = new Form($_POST);
$acteur1=new acteur($_POST['prenom'],$_POST['nom'],$_POST['film'],$_POST['cachet']);
?>
<form action="#" method="post">
<fieldset>
	<legend>Saisie Artistes</legend>
<?php
echo $form->input('prenom','Prenom');
echo $form->input('nom','Nom');
echo $form->input('film','Nom du film');
echo $form->input('cachet','Montant du cachet');
echo $form->submit();
?>
</fieldset>
</form>

<?php
	echo $acteur1->infosActeur();
?>