<?php

namespace App\Entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="UsersDetails")
 * @ORM\Entity(repositoryClass="App\Repository\UserDetailsRepository")
 */

class UserDetails
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="smallint", name="id", unique=true)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", name="name")
     */
    private $name;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="UserCredentials", inversedBy="UsersDetails")
     * @ORM\Column(type="string", name="email", length=50, unique="true")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", name="phone", length=50, unique="true")
     */
    private $phone;

    /**
     * @var string
     * @ORM\Column(type="string", name="password", length=50)
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(type="string", name="role", length=50)
     */
    private $role;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="verified", nullable=true)
     */
    private $verified;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="status")
     */
    private $status;

    /**
     * @var integer
     * @ORM\Column(type="integer", name="lastlogin", options={"unsigned"=true}, nullable=true)
     */
    private $lastLogin;

    /**
     * @var integer
     * @ORM\Column(type="integer", name="createdDate", options={"unsigned"=true}, nullable=true)
     */
    private $createdDate;

    /**
     * @var integer
     * @ORM\Column(type="integer", name="updatedDate", options={"unsigned"=true}, nullable=true)
     */
    private $updatedDate;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return UserDetails
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
     * Set email.
     *
     * @param string $email
     *
     * @return UserDetails
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
     * Set phone.
     *
     * @param string $phone
     *
     * @return UserDetails
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set role.
     *
     * @param string $role
     *
     * @return UserDetails
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set verified.
     *
     * @param bool $verified
     *
     * @return UserDetails
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified.
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set status.
     *
     * @param bool $status
     *
     * @return UserDetails
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
     * Set lastLogin.
     *
     * @param int $lastLogin
     *
     * @return UserDetails
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin.
     *
     * @return int
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set createdDate.
     *
     * @param int $createdDate
     *
     * @return UserDetails
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
     * @param int $updatedDate
     *
     * @return UserDetails
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate.
     *
     * @return int
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set password.
     *
     * @param string $password
     *
     * @return UserDetails
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
