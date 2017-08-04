<?php

namespace LVA\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="`user`", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 * @ORM\Entity(repositoryClass="LVA\UserBundle\User")
 */
class User extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=95, nullable=false)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=95, nullable=false)
     */
    protected $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=265, nullable=false)
     */
    protected $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=false)
     */
    protected $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_id", type="integer", nullable=false)
     */
    protected $villeId;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", nullable=false)
     */
    protected $civilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="LVA\UserBundle\Entity\Professionnel", mappedBy="user", cascade={"persist","remove"})
     */
    protected $professionnels;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->professionnels = new \Doctrine\Common\Collections\ArrayCollection();
    }
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTel() {
        return $this->tel;
    }

    function getVilleId() {
        return $this->villeId;
    }

    function getCivilite() {
        return $this->civilite;
    }

    function getId() {
        return $this->id;
    }

    function getProfessionnels(): \Doctrine\Common\Collections\Collection {
        return $this->professionnels;
    }

    function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    function setTel($tel) {
        $this->tel = $tel;
        return $this;
    }

    function setVilleId($villeId) {
        $this->villeId = $villeId;
        return $this;
    }

    function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

    function setProfessionnels(\Doctrine\Common\Collections\Collection $professionnels) {
        $this->professionnels = $professionnels;
        return $this;
    }


}

