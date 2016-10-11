<?php

namespace GalleryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diapo
 *
 * @ORM\Table(name="diapo")
 * @ORM\Entity(repositoryClass="GalleryBundle\Repository\DiapoRepository")
 */
class Diapo
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
     * @var string
     *
     * @ORM\Column(name="intro", type="text")
     */
    private $intro;
    
    /**
     * @var string
     *
     * @ORM\Column(name="photoRandom", type="string", length=100)
     */
    private $photoRandom;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;
    
    /**
    * @ORM\ManyToOne(targetEntity="Gallery", inversedBy="diapo")
    * @ORM\JoinColumn(nullable=true)
    */
    private $gallery;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Photo", mappedBy="diapo")
    */
    private $photo;
    
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
     * @return Diapo
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
     * Set intro
     *
     * @param string $intro
     *
     * @return Diapo
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;

        return $this;
    }

    /**
     * Get intro
     *
     * @return string
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set photoRandom
     *
     * @param string $photoRandom
     *
     * @return Diapo
     */
    public function setPhotoRandom($photoRandom)
    {
        $this->photoRandom = $photoRandom;

        return $this;
    }

    /**
     * Get photoRandom
     *
     * @return string
     */
    public function getPhotoRandom()
    {
        return $this->photoRandom;
    }

    /**
     * Set online
     *
     * @param boolean $online
     *
     * @return Diapo
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
        $this->gallery = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gallery
     *
     * @param \GalleryBundle\Entity\Gallery $gallery
     *
     * @return Diapo
     */
    public function addGallery(\GalleryBundle\Entity\Gallery $gallery)
    {
        $this->gallery[] = $gallery;

        return $this;
    }

    /**
     * Remove gallery
     *
     * @param \GalleryBundle\Entity\Gallery $gallery
     */
    public function removeGallery(\GalleryBundle\Entity\Gallery $gallery)
    {
        $this->gallery->removeElement($gallery);
    }

    /**
     * Get gallery
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * Set photo
     *
     * @param \GalleryBundle\Entity\Photo $photo
     *
     * @return Diapo
     */
    public function setPhoto(\GalleryBundle\Entity\Photo $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return \GalleryBundle\Entity\Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set gallery
     *
     * @param \GalleryBundle\Entity\Gallery $gallery
     *
     * @return Diapo
     */
    public function setGallery(\GalleryBundle\Entity\Gallery $gallery = null)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Add photo
     *
     * @param \GalleryBundle\Entity\Photo $photo
     *
     * @return Diapo
     */
    public function addPhoto(\GalleryBundle\Entity\Photo $photo)
    {
        $this->photo[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param \GalleryBundle\Entity\Photo $photo
     */
    public function removePhoto(\GalleryBundle\Entity\Photo $photo)
    {
        $this->photo->removeElement($photo);
    }
}
