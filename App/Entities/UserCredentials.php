<?php


namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="UsersCredentials")
 * @ORM\Entity(repositoryClass="App\Repository\UserCredentialsRepository")
 */

class UserCredentials
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="string", name="email", length=50, unique="true")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(type="string", name="password", length=50)
     */
    private $password;


    /**
     * Set email.
     *
     * @param string $email
     *
     * @return UserCredentials
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
     * Set password.
     *
     * @param string $password
     *
     * @return UserCredentials
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
