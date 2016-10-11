<?php

namespace ChatBundle\Entity;

/**
 * Chat
 */
class Chat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $qualite1;

    /**
     * @var string
     */
    private $qualite2;

    /**
     * @var string
     */
    private $defaut;

    /**
     * @var string
     */
    private $croquettes;

    /**
     * @var string
     */
    private $disponible;

    /**
     * @var boolean
     */
    private $dispo;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Chat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Chat
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set qualite1
     *
     * @param string $qualite1
     *
     * @return Chat
     */
    public function setQualite1($qualite1)
    {
        $this->qualite1 = $qualite1;

        return $this;
    }

    /**
     * Get qualite1
     *
     * @return string
     */
    public function getQualite1()
    {
        return $this->qualite1;
    }

    /**
     * Set qualite2
     *
     * @param string $qualite2
     *
     * @return Chat
     */
    public function setQualite2($qualite2)
    {
        $this->qualite2 = $qualite2;

        return $this;
    }

    /**
     * Get qualite2
     *
     * @return string
     */
    public function getQualite2()
    {
        return $this->qualite2;
    }

    /**
     * Set defaut
     *
     * @param string $defaut
     *
     * @return Chat
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return string
     */
    public function getDefaut()
    {
        return $this->defaut;
    }

    /**
     * Set croquettes
     *
     * @param string $croquettes
     *
     * @return Chat
     */
    public function setCroquettes($croquettes)
    {
        $this->croquettes = $croquettes;

        return $this;
    }

    /**
     * Get croquettes
     *
     * @return string
     */
    public function getCroquettes()
    {
        return $this->croquettes;
    }

    /**
     * Set disponible
     *
     * @param string $disponible
     *
     * @return Chat
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return string
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set dispo
     *
     * @param boolean $dispo
     *
     * @return Chat
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return boolean
     */
    public function getDispo()
    {
        return $this->dispo;
    }
}

