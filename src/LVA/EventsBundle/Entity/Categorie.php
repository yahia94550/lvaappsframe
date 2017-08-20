<?php

namespace LVA\EventsBundle\Entity;

/**
 * Categorie
 */
class Categorie
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $themes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $univers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->themes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->univers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Categorie
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
     * @return Categorie
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
        $this->categorie->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categorie;
    }

    /**
     * Add theme
     *
     * @param \LVA\EventsBundle\Entity\Theme $theme
     *
     * @return Categorie
     */
    public function addTheme(\LVA\EventsBundle\Entity\Theme $theme)
    {
        $this->themes[] = $theme;

        return $this;
    }

    /**
     * Remove theme
     *
     * @param \LVA\EventsBundle\Entity\Theme $theme
     */
    public function removeTheme(\LVA\EventsBundle\Entity\Theme $theme)
    {
        $this->themes->removeElement($theme);
    }

    /**
     * Get themes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTheme()
    {
        return $this->themes;
    }

    /**
     * Add univer
     *
     * @param \LVA\EventsBundle\Entity\Univer $univer
     *
     * @return Categorie
     */
    public function addUniver(\LVA\EventsBundle\Entity\Univer $univer)
    {
        $this->univers[] = $univer;

        return $this;
    }

    /**
     * Remove univer
     *
     * @param \LVA\EventsBundle\Entity\Univer $univer
     */
    public function removeUniver(\LVA\EventsBundle\Entity\Univer $univer)
    {
        $this->univers->removeElement($univer);
    }

    /**
     * Get univers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUniver()
    {
        return $this->univers;
    }
}

