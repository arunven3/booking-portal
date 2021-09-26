<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Properties")
 * @ORM\Entity(repositoryClass="App\Repository\PropertiesRepository")
 */

class Properties
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id", unique=true)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", name="email", length=50, unique="true")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", name="name", length=50)
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(type="string", name="type", length=25)
     */
    private $type;

    /**
     * @var bigint
     * @ORM\Column(type="bigint", name="size")
     */
    private $size;

    /**
     * @var string
     * @ORM\Column(type="string", name="description", length="150")
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string", name="address", length="150")
     */
    private $address;

    /**
     * @var string
     * @ORM\Column(type="string", name="lattitude", length="20")
     */
    private $lattitude;

    /**
     * @var string
     * @ORM\Column(type="string", name="longitude", length="20")
     */
    private $longitude;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="status")
     */
    private $status;


    /**
     * @var integer
     * @ORM\Column(type="integer", name="createdDate", options={"unsigned"=true})
     */
    private $createdDate;

    /**
     * @var integer
     * @ORM\Column(type="integer", name="updatedDate",  options={"unsigned"=true}, nullable=true)
     */
    private $updatedDate;


    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Properties
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Properties
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Properties
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set size.
     *
     * @param int $size
     *
     * @return Properties
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Properties
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Properties
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set lattitude.
     *
     * @param string $lattitude
     *
     * @return Properties
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    /**
     * Get lattitude.
     *
     * @return string
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * Set longitude.
     *
     * @param string $longitude
     *
     * @return Properties
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude.
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set createdDate.
     *
     * @param int $createdDate
     *
     * @return Properties
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate.
     *
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set updatedDate.
     *
     * @param int|null $updatedDate
     *
     * @return Properties
     */
    public function setUpdatedDate($updatedDate = null)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate.
     *
     * @return int|null
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return Properties
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get id.
     *
     * @return \int
     */
    public function getId()
    {
        return $this->id;
    }
}
