<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="App\Repository\SessionRepository")
 */
class Session
{
    /**
     * @var string
     * @ORM\Id
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
     * @ORM\Column(type="string", name="session", length=50)
     */
    private $sessionCode;

    /**
     * @var string
     * @ORM\Column(type="string", name="role", length=50)
     */
    private $role;

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Session
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
     * @return Session
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
     * Set sessionCode.
     *
     * @param string $sessionCode
     *
     * @return Session
     */
    public function setSessionCode($sessionCode)
    {
        $this->sessionCode = $sessionCode;

        return $this;
    }

    /**
     * Get sessionCode.
     *
     * @return string
     */
    public function getSessionCode()
    {
        return $this->sessionCode;
    }

    /**
     * Set role.
     *
     * @param string $role
     *
     * @return Session
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
}
