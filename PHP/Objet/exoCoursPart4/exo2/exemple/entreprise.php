<?php
require_once('Personne.php');
class Entreprise
{
private $_raisonSociale;
private $_lesEmployees=array();
public function __construct($rs)
{  
$this->_raisonSociale=$rs;
}
public function ajouteSalarie(Personne $unePersonne)
{
$this->_lesEmployees[]=$unePersonne;
}
public function getNom()
{
return $this->_raisonSociale;
}
public function getInfos()
{
$chaine="Le nom de lentreprise est :".$this->_raisonSociale."<br>";
$chaine=$chaine."Le nom des employes de cette entreprise sont :<br>";
foreach($this->_lesEmployees as $lemp)
{
$chaine=$chaine." ".$lemp->getNom()."<br>";
}
return $chaine;
}
}
