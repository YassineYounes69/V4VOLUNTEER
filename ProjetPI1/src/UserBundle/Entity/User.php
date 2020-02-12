<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
<<<<<<< HEAD
 * @ORM\Table(name="user")
=======
 * @ORM\Table(name="users")
>>>>>>> dfd40a50d5e94cfc507b4f4a4b8d231355233b8b
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;
=======
     * @ORM\Column(name="login", type="string", length=255, unique=true)
     */
    private $login;
>>>>>>> dfd40a50d5e94cfc507b4f4a4b8d231355233b8b

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $prenom;

=======
     * @ORM\Column(name="pw", type="string", length=255)
     */
    private $pw;
>>>>>>> dfd40a50d5e94cfc507b4f4a4b8d231355233b8b


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
<<<<<<< HEAD
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }





=======
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set pw
     *
     * @param string $pw
     *
     * @return User
     */
    public function setPw($pw)
    {
        $this->pw = $pw;

        return $this;
    }

    /**
     * Get pw
     *
     * @return string
     */
    public function getPw()
    {
        return $this->pw;
    }
>>>>>>> dfd40a50d5e94cfc507b4f4a4b8d231355233b8b
}

