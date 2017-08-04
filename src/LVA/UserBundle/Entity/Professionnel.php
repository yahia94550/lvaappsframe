<?php

namespace LVA\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Professionnel
 *
 * @ORM\Table(name="professionnels", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="professionnel_user_fk_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Professionnel
{
    /**
     * @var string
     *
     * @ORM\Column(name="raison_soc", type="string", length=95, nullable=false)
     */
    private $raisonSoc = 'NC';

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=25, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=225, nullable=false)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="ville_id", type="integer", nullable=false)
     */
    private $villeId;

    /**
     * @var string
     *
     * @ORM\Column(name="tel1", type="string", length=15, nullable=false)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=15, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email_pro", type="string", length=95, nullable=false)
     */
    private $emailPro;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=95, nullable=false)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'customer';

    /**
     * @var string
     *
     * @ORM\Column(name="tel2", type="string", length=25, nullable=true)
     */
    private $tel2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \LVA\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="LVA\UserBundle\Entity\User", inversedBy="professionnels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;
   
    public function getRaisonSoc() {
        return $this->raisonSoc;
    }

    public function getFonction() {
        return $this->fonction;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getVilleId() {
        return $this->villeId;
    }

    public function getTel1() {
        return $this->tel1;
    }

    public function getFax() {
        return $this->fax;
    }

    public function getEmailPro() {
        return $this->emailPro;
    }

    public function getWebsite() {
        return $this->website;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getTel2() {
        return $this->tel2;
    }

    public function getId() {
        return $this->id;
    }

    public function getUser(): \LVA\UserBundle\Entity\User {
        return $this->user;
    }

    public function setRaisonSoc($raisonSoc) {
        $this->raisonSoc = $raisonSoc;
        return $this;
    }

    public function setFonction($fonction) {
        $this->fonction = $fonction;
        return $this;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    public function setVilleId($villeId) {
        $this->villeId = $villeId;
        return $this;
    }

    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    public function setFax($fax) {
        $this->fax = $fax;
        return $this;
    }

    public function setEmailPro($emailPro) {
        $this->emailPro = $emailPro;
        return $this;
    }

    public function setWebsite($website) {
        $this->website = $website;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setTel2($tel2) {
        $this->tel2 = $tel2;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setUser(\LVA\UserBundle\Entity\User $user) {
        $this->user = $user;
        return $this;
    }

}

