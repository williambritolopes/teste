<?php

namespace EinsteinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 */


class Version
{

    /**
     * @var string
     */
    private $version;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \EinsteinBundle\Entity\Type
     */
    private $type;


    /**
     * Set version
     *
     * @param string $version
     * @return Version
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Version
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param \EinsteinBundle\Entity\Type $type
     * @return Version
     */
    public function setType(\EinsteinBundle\Entity\Type $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \EinsteinBundle\Entity\Type 
     */
    public function getType()
    {
        return $this->type;
    }
}
