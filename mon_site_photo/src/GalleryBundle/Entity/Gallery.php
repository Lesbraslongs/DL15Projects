<?php

namespace GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity(repositoryClass="GalleryBundle\Repository\GalleryRepository")
 */
class Gallery
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
     *
     * @ORM\Column(name="titre", type="string", length=100)
     */
    private $titre;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Diapo", mappedBy="gallery")
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
     * Set titre
     *
     * @param string $titre
     *
     * @return Gallery
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
     * Set diapo
     *
     * @param \GalleryBundle\Entity\Diapo $diapo
     *
     * @return Gallery
     */
    public function setDiapo(\GalleryBundle\Entity\Diapo $diapo)
    {
        $this->diapo = $diapo;

        return $this;
    }

    /**
     * Get diapo
     *
     * @return \GalleryBundle\Entity\Diapo
     */
    public function getDiapo()
    {
        return $this->diapo;
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
     * @return Gallery
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
}
