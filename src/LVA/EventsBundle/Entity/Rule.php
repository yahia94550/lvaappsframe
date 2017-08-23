<?php

namespace LVA\EventsBundle\Entity;
/**
 * Rrule
 */
class Rule
{
    /**
     * @var string
     */
    private $dtstart;

    /**
     * @var integer
     */
    private $intervall;

    /**
     * @var string
     */
    private $wkst;

    /**
     * @var integer
     */
    private $countt;

    /**
     * @var string
     */
    private $untill;

    /**
     * @var string
     */
    private $bymonth;

    /**
     * @var string
     */
    private $byweekno;

    /**
     * @var string
     */
    private $byyearday;

    /**
     * @var string
     */
    private $bymonthday;

    /**
     * @var string
     */
    private $byday;

    /**
     * @var string
     */
    private $byhour;

    /**
     * @var string
     */
    private $byminute;

    /**
     * @var string
     */
    private $bysecond;

    /**
     * @var string
     */
    private $bysetpos;

    /**
     * @var string
     */
    private $exdate;

    /**
     * @var string
     */
    private $freq;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rrules;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rrules = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set dtstart
     *
     * @param string $dtstart
     *
     * @return Rule
     */
    public function setDtstart($dtstart)
    {
        $this->dtstart = $dtstart;

        return $this;
    }

    /**
     * Get dtstart
     *
     * @return string
     */
    public function getDtstart()
    {
        return $this->dtstart;
    }

    /**
     * Set intervall
     *
     * @param integer $intervall
     *
     * @return Rule
     */
    public function setIntervall($intervall)
    {
        $this->intervall = $intervall;

        return $this;
    }

    /**
     * Get intervall
     *
     * @return integer
     */
    public function getIntervall()
    {
        return $this->intervall;
    }

    /**
     * Set wkst
     *
     * @param string $wkst
     *
     * @return Rule
     */
    public function setWkst($wkst)
    {
        $this->wkst = $wkst;

        return $this;
    }

    /**
     * Get wkst
     *
     * @return string
     */
    public function getWkst()
    {
        return $this->wkst;
    }

    /**
     * Set countt
     *
     * @param integer $countt
     *
     * @return Rule
     */
    public function setCountt($countt)
    {
        $this->countt = $countt;

        return $this;
    }

    /**
     * Get countt
     *
     * @return integer
     */
    public function getCountt()
    {
        return $this->countt;
    }

    /**
     * Set untill
     *
     * @param string $untill
     *
     * @return Rule
     */
    public function setUntill($untill)
    {
        $this->untill = $untill;

        return $this;
    }

    /**
     * Get untill
     *
     * @return string
     */
    public function getUntill()
    {
        return $this->untill;
    }

    /**
     * Set bymonth
     *
     * @param string $bymonth
     *
     * @return Rule
     */
    public function setBymonth($bymonth)
    {
        $this->bymonth = $bymonth;

        return $this;
    }

    /**
     * Get bymonth
     *
     * @return string
     */
    public function getBymonth()
    {
        return $this->bymonth;
    }

    /**
     * Set byweekno
     *
     * @param string $byweekno
     *
     * @return Rule
     */
    public function setByweekno($byweekno)
    {
        $this->byweekno = $byweekno;

        return $this;
    }

    /**
     * Get byweekno
     *
     * @return string
     */
    public function getByweekno()
    {
        return $this->byweekno;
    }

    /**
     * Set byyearday
     *
     * @param string $byyearday
     *
     * @return Rule
     */
    public function setByyearday($byyearday)
    {
        $this->byyearday = $byyearday;

        return $this;
    }

    /**
     * Get byyearday
     *
     * @return string
     */
    public function getByyearday()
    {
        return $this->byyearday;
    }

    /**
     * Set bymonthday
     *
     * @param string $bymonthday
     *
     * @return Rule
     */
    public function setBymonthday($bymonthday)
    {
        $this->bymonthday = $bymonthday;

        return $this;
    }

    /**
     * Get bymonthday
     *
     * @return string
     */
    public function getBymonthday()
    {
        return $this->bymonthday;
    }

    /**
     * Set byday
     *
     * @param string $byday
     *
     * @return Rule
     */
    public function setByday($byday)
    {
        $this->byday = $byday;

        return $this;
    }

    /**
     * Get byday
     *
     * @return string
     */
    public function getByday()
    {
        return $this->byday;
    }

    /**
     * Set byhour
     *
     * @param string $byhour
     *
     * @return Rule
     */
    public function setByhour($byhour)
    {
        $this->byhour = $byhour;

        return $this;
    }

    /**
     * Get byhour
     *
     * @return string
     */
    public function getByhour()
    {
        return $this->byhour;
    }

    /**
     * Set byminute
     *
     * @param string $byminute
     *
     * @return Rule
     */
    public function setByminute($byminute)
    {
        $this->byminute = $byminute;

        return $this;
    }

    /**
     * Get byminute
     *
     * @return string
     */
    public function getByminute()
    {
        return $this->byminute;
    }

    /**
     * Set bysecond
     *
     * @param string $bysecond
     *
     * @return Rule
     */
    public function setBysecond($bysecond)
    {
        $this->bysecond = $bysecond;

        return $this;
    }

    /**
     * Get bysecond
     *
     * @return string
     */
    public function getBysecond()
    {
        return $this->bysecond;
    }

    /**
     * Set bysetpos
     *
     * @param string $bysetpos
     *
     * @return Rule
     */
    public function setBysetpos($bysetpos)
    {
        $this->bysetpos = $bysetpos;

        return $this;
    }

    /**
     * Get bysetpos
     *
     * @return string
     */
    public function getBysetpos()
    {
        return $this->bysetpos;
    }

    /**
     * Set exdate
     *
     * @param string $exdate
     *
     * @return Rule
     */
    public function setExdate($exdate)
    {
        $this->exdate = $exdate;

        return $this;
    }

    /**
     * Get exdate
     *
     * @return string
     */
    public function getExdate()
    {
        return $this->exdate;
    }

    /**
     * Set freq
     *
     * @param string $freq
     *
     * @return Rule
     */
    public function setFreq($freq)
    {
        $this->freq = $freq;

        return $this;
    }

    /**
     * Get freq
     *
     * @return string
     */
    public function getFreq()
    {
        return $this->freq;
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
     * Add rrule
     *
     * @param \LVA\EventsBundle\Entity\Rule $rrule
     *
     * @return Rule
     */
    public function addRrule(\LVA\EventsBundle\Entity\Rule $rrule)
    {
        $this->rrules[] = $rrule;

        return $this;
    }

    /**
     * Remove rrule
     *
     * @param \LVA\EventsBundle\Entity\Rule $rrule
     */
    public function removeRrule(\LVA\EventsBundle\Entity\Rule $rrule)
    {
        $this->rrules->removeElement($rrule);
    }

    /**
     * Get rrules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRrules()
    {
        return $this->rrules;
    }
}

