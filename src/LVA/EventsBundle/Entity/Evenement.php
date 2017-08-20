<?php

namespace LVA\EventsBundle\Entity;

/**
 * Evenement
 */
class Evenement
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var integer
     */
    private $organisateursId;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $villesId;

    /**
     * @var string
     */
    private $aCoteDe;

    /**
     * @var string
     */
    private $tel1;

    /**
     * @var string
     */
    private $tel2;

    /**
     * @var string
     */
    private $tel3;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $participantsType = '0';

    /**
     * @var boolean
     */
    private $payantGratuit;

    /**
     * @var float
     */
    private $tarif;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var boolean
     */
    private $isToys = '0';

    /**
     * @var integer
     */
    private $orgaId;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \LVA\EventsBundle\Entity\Categorie
     */
    private $categories;

    /**
     * @var \LVA\EventsBundle\Entity\Rrule
     */
    private $rrule;

    /**
     * @var \LVA\EventsBundle\Entity\Univer
     */
    private $univers;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Evenement
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
     * Set organisateursId
     *
     * @param integer $organisateursId
     *
     * @return Evenement
     */
    public function setOrganisateursId($organisateursId)
    {
        $this->organisateursId = $organisateursId;

        return $this;
    }

    /**
     * Get organisateursId
     *
     * @return integer
     */
    public function getOrganisateursId()
    {
        return $this->organisateursId;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Evenement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set villesId
     *
     * @param integer $villesId
     *
     * @return Evenement
     */
    public function setVillesId($villesId)
    {
        $this->villesId = $villesId;

        return $this;
    }

    /**
     * Get villesId
     *
     * @return integer
     */
    public function getVillesId()
    {
        return $this->villesId;
    }

    /**
     * Set aCoteDe
     *
     * @param string $aCoteDe
     *
     * @return Evenement
     */
    public function setACoteDe($aCoteDe)
    {
        $this->aCoteDe = $aCoteDe;

        return $this;
    }

    /**
     * Get aCoteDe
     *
     * @return string
     */
    public function getACoteDe()
    {
        return $this->aCoteDe;
    }

    /**
     * Set tel1
     *
     * @param string $tel1
     *
     * @return Evenement
     */
    public function setTel1($tel1)
    {
        $this->tel1 = $tel1;

        return $this;
    }

    /**
     * Get tel1
     *
     * @return string
     */
    public function getTel1()
    {
        return $this->tel1;
    }

    /**
     * Set tel2
     *
     * @param string $tel2
     *
     * @return Evenement
     */
    public function setTel2($tel2)
    {
        $this->tel2 = $tel2;

        return $this;
    }

    /**
     * Get tel2
     *
     * @return string
     */
    public function getTel2()
    {
        return $this->tel2;
    }

    /**
     * Set tel3
     *
     * @param string $tel3
     *
     * @return Evenement
     */
    public function setTel3($tel3)
    {
        $this->tel3 = $tel3;

        return $this;
    }

    /**
     * Get tel3
     *
     * @return string
     */
    public function getTel3()
    {
        return $this->tel3;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Evenement
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Evenement
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set participantsType
     *
     * @param integer $participantsType
     *
     * @return Evenement
     */
    public function setParticipantsType($participantsType)
    {
        $this->participantsType = $participantsType;

        return $this;
    }

    /**
     * Get participantsType
     *
     * @return integer
     */
    public function getParticipantsType()
    {
        return $this->participantsType;
    }

    /**
     * Set payantGratuit
     *
     * @param boolean $payantGratuit
     *
     * @return Evenement
     */
    public function setPayantGratuit($payantGratuit)
    {
        $this->payantGratuit = $payantGratuit;

        return $this;
    }

    /**
     * Get payantGratuit
     *
     * @return boolean
     */
    public function getPayantGratuit()
    {
        return $this->payantGratuit;
    }

    /**
     * Set tarif
     *
     * @param float $tarif
     *
     * @return Evenement
     */
    public function setTarif($tarif)
    {
        $this->tarif = $tarif;

        return $this;
    }

    /**
     * Get tarif
     *
     * @return float
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Evenement
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set isToys
     *
     * @param boolean $isToys
     *
     * @return Evenement
     */
    public function setIsToys($isToys)
    {
        $this->isToys = $isToys;

        return $this;
    }

    /**
     * Get isToys
     *
     * @return boolean
     */
    public function getIsToys()
    {
        return $this->isToys;
    }

    /**
     * Set orgaId
     *
     * @param integer $orgaId
     *
     * @return Evenement
     */
    public function setOrgaId($orgaId)
    {
        $this->orgaId = $orgaId;

        return $this;
    }

    /**
     * Get orgaId
     *
     * @return integer
     */
    public function getOrgaId()
    {
        return $this->orgaId;
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
     * Set categories
     *
     * @param \LVA\EventsBundle\Entity\Categorie $categories
     *
     * @return Evenement
     */
    public function setCategories(\LVA\EventsBundle\Entity\Categorie $categories = null)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return \LVA\EventsBundle\Entity\Categorie
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set rrule
     *
     * @param \LVA\EventsBundle\Entity\Rrule $rrule
     *
     * @return Evenement
     */
    public function setRrule(\LVA\EventsBundle\Entity\Rrule $rrule = null)
    {
        $this->rrule = $rrule;

        return $this;
    }

    /**
     * Get rrule
     *
     * @return \LVA\EventsBundle\Entity\Rrule
     */
    public function getRrule()
    {
        return $this->rrule;
    }

    /**
     * Set univers
     *
     * @param \LVA\EventsBundle\Entity\Univer $univers
     *
     * @return Evenement
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
}

