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
    private $organisateurId;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $villeId;

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
    private $id;

    /**
     * @var \LVA\EventsBundle\Entity\Rule
     */
    private $rule;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categorie;
    
     /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $univer;

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
     * Set organisateurId
     *
     * @param integer $organisateurId
     *
     * @return Evenement
     */
    public function setOrganisateurId($organisateurId)
    {
        $this->organisateurId = $organisateurId;

        return $this;
    }

    /**
     * Get organisateurId
     *
     * @return integer
     */
    public function getOrganisateurId()
    {
        return $this->organisateurId;
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
     * Set villeId
     *
     * @param integer $villeId
     *
     * @return Evenement
     */
    public function setVilleId($villeId)
    {
        $this->villeId = $villeId;

        return $this;
    }

    /**
     * Get villeId
     *
     * @return integer
     */
    public function getVilleId()
    {
        return $this->villeId;
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rule
     *
     * @param \LVA\EventsBundle\Entity\Rule $rule
     *
     * @return Evenement
     */
    public function setRule(\LVA\EventsBundle\Entity\Rule $rule = null)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Get rule
     *
     * @return \LVA\EventsBundle\Entity\Rule
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Add categorie
     *
     * @param \LVA\EventsBundle\Entity\Categorie $categorie
     *
     * @return Evenement
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
     * Add univer
     *
     * @param \LVA\EventsBundle\Entity\Univer $univer
     *
     * @return Evenement
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
}

