<?php

namespace BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity(repositoryClass="BackOfficeBundle\Repository\ConfigRepository")
 */
class Config
{
    use ORMBehaviors\Timestampable\Timestampable;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=64)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="storage", type="string", length=255, nullable=true)
     */
    private $storage;

    /**
     * @var string
     *
     * @ORM\Column(name="resinioApp", type="string", length=64, nullable=true)
     */
    private $resinioApp;

    /**
     * @var string
     *
     * @ORM\Column(name="dbUser", type="string", length=32, nullable=true)
     */
    private $dbUser;

    /**
     * @var string
     *
     * @ORM\Column(name="dbPassword", type="string", length=64, nullable=true)
     */
    private $dbPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="dbName", type="string", length=32, nullable=true)
     */
    private $dbName;

    /**
     * @var \stdClass
     *
     * @ORM\OneToMany(targetEntity="CRMBundle\Entity\Customer", mappedBy="config")
     */
    private $customers;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Config
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set storage
     *
     * @param string $storage
     *
     * @return Config
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }

    /**
     * Get storage
     *
     * @return string
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * Set resinioApp
     *
     * @param string $resinioApp
     *
     * @return Config
     */
    public function setResinioApp($resinioApp)
    {
        $this->resinioApp = $resinioApp;

        return $this;
    }

    /**
     * Get resinioApp
     *
     * @return string
     */
    public function getResinioApp()
    {
        return $this->resinioApp;
    }

    /**
     * Set dbUser
     *
     * @param string $dbUser
     *
     * @return Config
     */
    public function setDbUser($dbUser)
    {
        $this->dbUser = $dbUser;

        return $this;
    }

    /**
     * Get dbUser
     *
     * @return string
     */
    public function getDbUser()
    {
        return $this->dbUser;
    }

    /**
     * Set dbPassword
     *
     * @param string $dbPassword
     *
     * @return Config
     */
    public function setDbPassword($dbPassword)
    {
        $this->dbPassword = $dbPassword;

        return $this;
    }

    /**
     * Get dbPassword
     *
     * @return string
     */
    public function getDbPassword()
    {
        return $this->dbPassword;
    }

    /**
     * Set dbName
     *
     * @param string $dbName
     *
     * @return Config
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;

        return $this;
    }

    /**
     * Get dbName
     *
     * @return string
     */
    public function getDbName()
    {
        return $this->dbName;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add customer
     *
     * @param \CRMBundle\Entity\Customer $customer
     *
     * @return Config
     */
    public function addCustomer(\CRMBundle\Entity\Customer $customer)
    {
        $this->customers[] = $customer;

        return $this;
    }

    /**
     * Remove customer
     *
     * @param \CRMBundle\Entity\Customer $customer
     */
    public function removeCustomer(\CRMBundle\Entity\Customer $customer)
    {
        $this->customers->removeElement($customer);
    }

    /**
     * Get customers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    public function __toString()
    {
        return $this->getTitle();
    }
}
