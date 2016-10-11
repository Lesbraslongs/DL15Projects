<?php

require_once "src/Realisateur.php";

$luc = new Realisateur();
$luc->setName('Luc Besson');
//var_dump($luc);

//$luc->insert();
echo $luc->select($luc->getId());

var_dump($luc);

?>
