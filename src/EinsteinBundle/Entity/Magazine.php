<?php

namespace EinsteinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Magazine
 */
class Magazine
{
    /**
     * @var integer
     */
    private $number;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $andressCover;

    /**
     * @var string
     */
    private $andressFeatured;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \DateTime
     */
    private $deleted;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \EinsteinBundle\Entity\Version
     */
    private $vol;

    /**
     * @var \EinsteinBundle\Entity\Status
     */
    private $status;

    /**
     * @var \EinsteinBundle\Entity\Language
     */
    private $language;


    /**
     * Set number
     *
     * @param integer $number
     * @return Magazine
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Magazine
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set andressCover
     *
     * @param string $andressCover
     * @return Magazine
     */
    public function setAndressCover($andressCover)
    {
        $this->andressCover = $andressCover;

        return $this;
    }

    /**
     * Get andressCover
     *
     * @return string 
     */
    public function getAndressCover()
    {
        return $this->andressCover;
    }

    /**
     * Set andressFeatured
     *
     * @param string $andressFeatured
     * @return Magazine
     */
    public function setAndressFeatured($andressFeatured)
    {
        $this->andressFeatured = $andressFeatured;

        return $this;
    }

    /**
     * Get andressFeatured
     *
     * @return string 
     */
    public function getAndressFeatured()
    {
        return $this->andressFeatured;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Magazine
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Magazine
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set deleted
     *
     * @param \DateTime $deleted
     * @return Magazine
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return \DateTime 
     */
    public function getDeleted()
    {
        return $this->deleted;
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
     * Set vol
     *
     * @param \EinsteinBundle\Entity\Version $vol
     * @return Magazine
     */
    public function setVol(\EinsteinBundle\Entity\Version $vol = null)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return \EinsteinBundle\Entity\Version 
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Set status
     *
     * @param \EinsteinBundle\Entity\Status $status
     * @return Magazine
     */
    public function setStatus(\EinsteinBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \EinsteinBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set language
     *
     * @param \EinsteinBundle\Entity\Language $language
     * @return Magazine
     */
    public function setLanguage(\EinsteinBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \EinsteinBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }
}
