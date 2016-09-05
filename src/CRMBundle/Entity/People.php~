<?php

namespace CRMBundle\Entity;

use CRMBundle\Entity\Utils\CRMObject;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * People
 *
 * @ORM\Table(name="people")
 * @ORM\Entity(repositoryClass="CRMBundle\Repository\PeopleRepository")
 */
class People
{
    use ORMBehaviors\Timestampable\Timestampable;
    use CRMObject;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="peoples")
     */
    private $customer;


    /**
     * Set email
     *
     * @param string $email
     *
     * @return People
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
     * Set customer
     *
     * @param \stdClass $customer
     *
     * @return People
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \stdClass
     */
    public function getCustomer()
    {
        return $this->customer;
    }


}
