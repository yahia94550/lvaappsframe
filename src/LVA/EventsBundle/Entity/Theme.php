<?php

namespace LVA\EventsBundle\Entity;

/**
 * Theme
 */
class Theme
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Theme
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
     * Add category
     *
     * @param \LVA\EventsBundle\Entity\Categorie $category
     *
     * @return Theme
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
    public function getCategorie()
    {
        return $this->categories;
    }
}

