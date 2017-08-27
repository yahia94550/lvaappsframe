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
     * @var \LVA\EventsBundle\Entity\Categorie
     */
    private $categorie;


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
     * Set categorie
     *
     * @param \LVA\EventsBundle\Entity\Categorie $categorie
     *
     * @return Theme
     */
    public function setCategorie(\LVA\EventsBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \LVA\EventsBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}

