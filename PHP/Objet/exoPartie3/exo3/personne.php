<?php

	abstract class Personne
	{
		protected $_nom;
		protected $_prenom;
		protected $_tel;
		function __construct($nom,$prenom,$tel)
		{
			$this->_nom=$nom;
			$this->prenom=$prenom;
			$this->tel=$tel;
		}

    public function getTel()
    {
        return $this->_tel;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    protected function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    protected function setPrenom($prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }

    protected function setTel($tel)
    {
        $this->_tel = $tel;

        return $this;
    }
}
?>