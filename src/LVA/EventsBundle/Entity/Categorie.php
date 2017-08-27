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
    private $categorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $catevent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $univer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evenement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->catevent = new \Doctrine\Common\Collections\ArrayCollection();
        $this->univer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->evenement = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add categorie
     *
     * @param \LVA\EventsBundle\Entity\Categorie $categorie
     *
     * @return Categorie
     */
    public function addCategorie(\LVA\EventsBundle\Entity\Categorie $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie
     *
     * @param \LVA\EventsBundle\Entity\Categorie $categorie
     */
    public function removeCategorie(\LVA\EventsBundle\Entity\Categorie $categorie)
    {
        $this->categorie->removeElement($categorie);
    }

    /**
     * Get categorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Add catevent
     *
     * @param \LVA\EventsBundle\Entity\Theme $catevent
     *
     * @return Categorie
     */
    public function addCatevent(\LVA\EventsBundle\Entity\Theme $catevent)
    {
        $this->catevent[] = $catevent;

        return $this;
    }

    /**
     * Remove catevent
     *
     * @param \LVA\EventsBundle\Entity\Theme $catevent
     */
    public function removeCatevent(\LVA\EventsBundle\Entity\Theme $catevent)
    {
        $this->catevent->removeElement($catevent);
    }

    /**
     * Get catevent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCatevent()
    {
        return $this->catevent;
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
        $this->univer[] = $univer;

        return $this;
    }

    /**
     * Remove univer
     *
     * @param \LVA\EventsBundle\Entity\Univer $univer
     */
    public function removeUniver(\LVA\EventsBundle\Entity\Univer $univer)
    {
        $this->univer->removeElement($univer);
    }

    /**
     * Get univer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUniver()
    {
        return $this->univer;
    }

    /**
     * Add evenement
     *
     * @param \LVA\EventsBundle\Entity\Evenement $evenement
     *
     * @return Categorie
     */
    public function addEvenement(\LVA\EventsBundle\Entity\Evenement $evenement)
    {
        $this->evenement[] = $evenement;

        return $this;
    }

    /**
     * Remove evenement
     *
     * @param \LVA\EventsBundle\Entity\Evenement $evenement
     */
    public function removeEvenement(\LVA\EventsBundle\Entity\Evenement $evenement)
    {
        $this->evenement->removeElement($evenement);
    }

    /**
     * Get evenement
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvenement()
    {
        return $this->evenement;
    }
}

