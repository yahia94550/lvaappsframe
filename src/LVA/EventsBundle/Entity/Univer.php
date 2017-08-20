<?php

namespace LVA\EventsBundle\Entity;

/**
 * Univer
 */
class Univer
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \LVA\EventsBundle\Entity\Univer
     */
    private $univers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Univer
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set univers
     *
     * @param \LVA\EventsBundle\Entity\Univer $univers
     *
     * @return Univer
     */
    public function setUnivers(\LVA\EventsBundle\Entity\Univer $univers = null)
    {
        $this->univers = $univers;

        return $this;
    }

    /**
     * Get univers
     *
     * @return \LVA\EventsBundle\Entity\Univer
     */
    public function getUnivers()
    {
        return $this->univers;
    }

    /**
     * Add category
     *
     * @param \LVA\EventsBundle\Entity\Categorie $category
     *
     * @return Univer
     */
    public function addCategory(\LVA\EventsBundle\Entity\Categorie $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \LVA\EventsBundle\Entity\Categorie $category
     */
    public function removeCategory(\LVA\EventsBundle\Entity\Categorie $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}

