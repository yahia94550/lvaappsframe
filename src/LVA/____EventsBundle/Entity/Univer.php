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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categorie;
    
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
     * Add categorie
     *
     * @param \LVA\EventsBundle\Entity\Categorie $categorie
     *
     * @return Univer
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
     * Add evenement
     *
     * @param \LVA\EventsBundle\Entity\Evenement $evenement
     *
     * @return Univer
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

