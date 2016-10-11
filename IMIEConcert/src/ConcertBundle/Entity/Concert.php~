<?php

namespace ConcertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table(name="concert")
 * @ORM\Entity(repositoryClass="ConcertBundle\Repository\ConcertRepository")
 */
class Concert
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
     * @var int
     *
     * @ORM\Column(name="salary", type="integer")
     */
    private $salary;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startingDate", type="datetime")
     */
    private $startingDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endingDate", type="datetime")
     */
    private $endingDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="cancel", type="boolean")
     */
    private $cancel;
    
    /**
    * @ORM\ManyToOne(targetEntity="Band", inversedBy="concert")
    * @ORM\JoinColumn(nullable=false)
    */
    private $band; //clé étrangère
    
    /**
    * @ORM\ManyToOne(targetEntity="Place", inversedBy="concert")
    * @ORM\JoinColumn(nullable=false)
    */
    private $place; //clé étrangère

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
     * Set salary
     *
     * @param integer $salary
     *
     * @return Concert
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set startingDate
     *
     * @param \DateTime $startingDate
     *
     * @return Concert
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;

        return $this;
    }

    /**
     * Get startingDate
     *
     * @return \DateTime
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * Set endingDate
     *
     * @param \DateTime $endingDate
     *
     * @return Concert
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;

        return $this;
    }

    /**
     * Get endingDate
     *
     * @return \DateTime
     */
    public function getEndingDate()
    {
        return $this->endingDate;
    }

    /**
     * Set cancel
     *
     * @param boolean $cancel
     *
     * @return Concert
     */
    public function setCancel($cancel)
    {
        $this->cancel = $cancel;

        return $this;
    }

    /**
     * Get cancel
     *
     * @return bool
     */
    public function getCancel()
    {
        return $this->cancel;
    }

    /**
     * Set band
     *
     * @param \ConcertBundle\Entity\Band $band
     *
     * @return Concert
     */
    public function setBand(\ConcertBundle\Entity\Band $band)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return \ConcertBundle\Entity\Band
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * Set place
     *
     * @param \ConcertBundle\Entity\Place $place
     *
     * @return Concert
     */
    public function setPlace(\ConcertBundle\Entity\Place $place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \ConcertBundle\Entity\Place
     */
    public function getPlace()
    {
        return $this->place;
    }
}
