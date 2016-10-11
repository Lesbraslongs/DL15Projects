<?php

namespace ConcertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table(name="place")
 * @ORM\Entity(repositoryClass="ConcertBundle\Repository\PlaceRepository")
 */
class Place
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="string", length=10)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20)
     */
    private $phone;
    
    /**
    * @ORM\OnetoMany(targetEntity="Concert", mappedBy="place")
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
     * @return Place
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
     * Set city
     *
     * @param string $city
     *
     * @return Place
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Place
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Place
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set concerts
     *
     * @param \ConcertBundle\Entity\Concert $concerts
     *
     * @return Place
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
     * @return Place
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
     * @return Place
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
