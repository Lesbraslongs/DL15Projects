<?php

namespace ConcertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Band
 *
 * @ORM\Table(name="band")
 * @ORM\Entity(repositoryClass="ConcertBundle\Repository\BandRepository")
 */
class Band
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;
    
    /**
    * @ORM\OnetoMany(targetEntity="Concert", mappedBy="band")
    */
    private $concert;
    
//---------------------------------GETTERS SETTERS -----------------------------

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
     * Set name
     *
     * @param string $name
     *
     * @return Band
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set concerts
     *
     * @param \ConcertBundle\Entity\Concert $concerts
     *
     * @return Band
     */
    public function setConcerts(\ConcertBundle\Entity\Concert $concerts)
    {
        $this->concerts = $concerts;

        return $this;
    }

    /**
     * Get concerts
     *
     * @return \ConcertBundle\Entity\Concert
     */
    public function getConcerts()
    {
        return $this->concerts;
    }

    /**
     * Set concert
     *
     * @param \ConcertBundle\Entity\Concert $concert
     *
     * @return Band
     */
    public function setConcert(\ConcertBundle\Entity\Concert $concert)
    {
        $this->concert = $concert;

        return $this;
    }

    /**
     * Get concert
     *
     * @return \ConcertBundle\Entity\Concert
     */
    public function getConcert()
    {
        return $this->concert;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->concert = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add concert
     *
     * @param \ConcertBundle\Entity\Concert $concert
     *
     * @return Band
     */
    public function addConcert(\ConcertBundle\Entity\Concert $concert)
    {
        $this->concert[] = $concert;

        return $this;
    }

    /**
     * Remove concert
     *
     * @param \ConcertBundle\Entity\Concert $concert
     */
    public function removeConcert(\ConcertBundle\Entity\Concert $concert)
    {
        $this->concert->removeElement($concert);
    }
}
