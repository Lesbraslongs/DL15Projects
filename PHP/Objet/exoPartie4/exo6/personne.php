<?php
require_once("formatage.php");

class Personne implements Formatage
{
	private $_nom;
	private $_dateNaissance;
	private $_salaire;
	public function __construct($nom, $dateNaissance, $salaire)
	{
		$this->_nom = $this->formatageChaine($nom);
		//$this->dateNaissance = $dateNaissance;
		$this->_salaire = $this->formatageNombre($salaire);
	}
	public function getInfos()
	{
	/* créer le code de la méthode getInfos sachant qu'il affichage un message du type
	MARTINEAU salaire 88 000,95 euros*/
		return $this->_nom . " = Salaire : " . $this->_salaire . " € - ";
	}

	public function formatageChaine($chaine)
	{
		return strToUpper($chaine);
	}

	public function formatageNombre($nombre)
	{
		return number_format($nombre, 2, ",", " ");
	}
}
?>