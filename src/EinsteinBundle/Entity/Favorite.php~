<?php

namespace EinsteinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favorite
 */
class Favorite
{
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
     * @var \EinsteinBundle\Entity\User
     */
    private $user;

    /**
     * @var \EinsteinBundle\Entity\Content
     */
    private $magazine;


    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Favorite
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
     * @return Favorite
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
     * @return Favorite
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
     * Set user
     *
     * @param \EinsteinBundle\Entity\User $user
     * @return Favorite
     */
    public function setUser(\EinsteinBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EinsteinBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set magazine
     *
     * @param \EinsteinBundle\Entity\Content $magazine
     * @return Favorite
     */
    public function setMagazine(\EinsteinBundle\Entity\Content $magazine = null)
    {
        $this->magazine = $magazine;

        return $this;
    }

    /**
     * Get magazine
     *
     * @return \EinsteinBundle\Entity\Content 
     */
    public function getMagazine()
    {
        return $this->magazine;
    }
}
