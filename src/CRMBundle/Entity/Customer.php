<?php

namespace CRMBundle\Entity;

use CRMBundle\Entity\Utils\CRMObject;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="CRMBundle\Repository\CustomerRepository")
 */
class Customer
{
    use ORMBehaviors\Timestampable\Timestampable;
    use CRMObject;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=16)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="domain", type="string", length=64)
     */
    private $domain;

    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="BackOfficeBundle\Entity\Config", inversedBy="customers")
     */
    private $config;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="People", mappedBy="customer")
     */
    private $peoples;

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Customer
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set domain
     *
     * @param string $domain
     *
     * @return Customer
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contacts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contact
     *
     * @param \CRMBundle\Entity\People $contact
     *
     * @return Customer
     */
    public function addContact(\CRMBundle\Entity\People $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * Remove contact
     *
     * @param \CRMBundle\Entity\People $contact
     */
    public function removeContact(\CRMBundle\Entity\People $contact)
    {
        $this->contacts->removeElement($contact);
    }

    /**
     * Get contacts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Add people
     *
     * @param \CRMBundle\Entity\People $people
     *
     * @return Customer
     */
    public function addPeople(\CRMBundle\Entity\People $people)
    {
        $this->peoples[] = $people;

        return $this;
    }

    /**
     * Remove people
     *
     * @param \CRMBundle\Entity\People $people
     */
    public function removePeople(\CRMBundle\Entity\People $people)
    {
        $this->peoples->removeElement($people);
    }

    /**
     * Get peoples
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeoples()
    {
        return $this->peoples;
    }

    /**
     * Set config
     *
     * @param \BackOfficeBundle\Entity\Config $config
     *
     * @return Customer
     */
    public function setConfig(\BackOfficeBundle\Entity\Config $config = null)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get config
     *
     * @return \BackOfficeBundle\Entity\Config
     */
    public function getConfig()
    {
        return $this->config;
    }
}
