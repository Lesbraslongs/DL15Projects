<?php

namespace ConcertBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Toto
 *
 * @ORM\Table(name="toto")
 * @ORM\Entity(repositoryClass="ConcertBundle\Repository\TotoRepository")
 */
class Toto
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
     * @ORM\Column(name="titi", type="string", length=255)
     */
    private $titi;

    /**
     * @var string
     *
     * @ORM\Column(name="tata", type="string", length=255)
     */
    private $tata;

    /**
     * @var string
     *
     * @ORM\Column(name="toto", type="string", length=255)
     */
    private $toto;


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
     * Set titi
     *
     * @param string $titi
     *
     * @return Toto
     */
    public function setTiti($titi)
    {
        $this->titi = $titi;

        return $this;
    }

    /**
     * Get titi
     *
     * @return string
     */
    public function getTiti()
    {
        return $this->titi;
    }

    /**
     * Set tata
     *
     * @param string $tata
     *
     * @return Toto
     */
    public function setTata($tata)
    {
        $this->tata = $tata;

        return $this;
    }

    /**
     * Get tata
     *
     * @return string
     */
    public function getTata()
    {
        return $this->tata;
    }

    /**
     * Set toto
     *
     * @param string $toto
     *
     * @return Toto
     */
    public function setToto($toto)
    {
        $this->toto = $toto;

        return $this;
    }

    /**
     * Get toto
     *
     * @return string
     */
    public function getToto()
    {
        return $this->toto;
    }
}

