<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\ElasticaBundle\Configuration\Search;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @Search(repositoryClass="Obtao\BlogBundle\Entity\SearchRepository\ArticleRepository")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="Obtao\BlogBundle\Entity\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */
    protected $content;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="published_at", type="datetime", nullable=true)
     */
    protected $publishedAt;

    /**
    * @ORM\PrePersist
    */
    public function prePersist()
    {
        $this->createdAt = new \DateTime();
    }

    public function isPublished()
    {
        return (null !== $this->getPublishedAt());
    }

    // others getters and setters

}