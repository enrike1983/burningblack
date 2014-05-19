<?php 

namespace Bb\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; //doctrineExtension

/**
 * @ORM\Entity(repositoryClass="Bb\SiteBundle\Entity\GigRepository")
 * @ORM\Table(name="gigs")
 */
class Gig
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $publish_date;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $venue;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

     /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $is_active = false;   

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     *
     */
    private $created;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     *
     */
    private $updated;    

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
     * Set publish_date
     *
     * @param \DateTime $publishDate
     * @return Gig
     */
    public function setPublishDate($publishDate)
    {
        $this->publish_date = $publishDate;

        return $this;
    }

    /**
     * Get publish_date
     *
     * @return \DateTime 
     */
    public function getPublishDate()
    {
        return $this->publish_date;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Gig
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
     * Set is_active
     *
     * @param boolean $isActive
     * @return Gig
     */
    public function setIsActive($isActive)
    {
        $this->is_active = $isActive;

        return $this;
    }

    /**
     * Get is_active
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Gig
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
     * @return Gig
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
     * Set venue
     *
     * @param string $venue
     * @return Gig
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;

        return $this;
    }

    /**
     * Get venue
     *
     * @return string 
     */
    public function getVenue()
    {
        return $this->venue;
    }
}
