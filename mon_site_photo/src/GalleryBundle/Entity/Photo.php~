<?php

namespace GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="GalleryBundle\Repository\PhotoRepository")
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
    * @var string
    * @ORM\Column(name="url", type="string", length=255)
    */
    private $url;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100)
     */
    private $libelle;
    
    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;
    
    /**
    * @ORM\ManyToOne(targetEntity="Diapo", inversedBy="photo")
    * @ORM\JoinColumn(nullable=false)
    */
    private $diapo;

    //--------------------------GETTERS SETTERS---------------------------------


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Photo
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Photo
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Photo
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Photo
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Photo
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Photo
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean
     */
    public function getOnline()
    {
        return $this->online;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->diapo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add diapo
     *
     * @param \GalleryBundle\Entity\Diapo $diapo
     *
     * @return Photo
     */
    public function addDiapo(\GalleryBundle\Entity\Diapo $diapo)
    {
        $this->diapo[] = $diapo;

        return $this;
    }

    /**
     * Remove diapo
     *
     * @param \GalleryBundle\Entity\Diapo $diapo
     */
    public function removeDiapo(\GalleryBundle\Entity\Diapo $diapo)
    {
        $this->diapo->removeElement($diapo);
    }

    /**
     * Get diapo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiapo()
    {
        return $this->diapo;
    }

    /**
     * Set diapo
     *
     * @param \GalleryBundle\Entity\Diapo $diapo
     *
     * @return Photo
     */
    public function setDiapo(\GalleryBundle\Entity\Diapo $diapo)
    {
        $this->diapo = $diapo;

        return $this;
    }
}
