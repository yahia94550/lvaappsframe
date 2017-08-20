<?php

namespace LVA\EventsBundle\Entity;
//use RRule\RRule; 
/**
 * Rrule
 */
class Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @return Rrule
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
     * @param \LVA\EventsBundle\Entity\Rrule $rrule
     *
     * @return Rrule
     */
    public function addRrule(\LVA\EventsBundle\Entity\Rrule $rrule)
    {
        $this->rrules[] = $rrule;

        return $this;
    }

    /**
     * Remove rrule
     *
     * @param \LVA\EventsBundle\Entity\Rrule $rrule
     */
    public function removeRrule(\LVA\EventsBundle\Entity\Rrule $rrule)
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
    
    public function getParent()
    {
        return 'RRule\RRule';

    }
}

