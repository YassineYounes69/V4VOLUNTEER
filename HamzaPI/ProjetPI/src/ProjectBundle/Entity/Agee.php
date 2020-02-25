<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Agee
 *
 * @ORM\Table(name="agee")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\AgeeRepository")
 */
class Agee
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }





    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }




    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * @var string
     * @Assert\Type("alpha")
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @Assert\Type("alpha")
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;



    /**
     * @var int
     * @Assert\Range(
     *      min = 55,
     *      max = 100)
     * @ORM\Column(name="age", type="integer")
     */
    private $age;
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id", nullable=true)
     * })
     */
    private $id_membre;


    /**
     * @var string
     * @Assert\Type("alpha")
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="donation", type="integer")
     */
    private $donation;

    /**
     * @Assert\Range(
     *      min = 1,
     *      max = 999999999999999999)
     * @return integer
     */
    public function getDonation()
    {
        return $this->donation;
    }

    /**
     * @param string $donation
     */
    public function setDonation($donation)
    {
        $this->donation = $donation;
    }


    /**
     * @param mixed $id_membre
     */

    public function setIdMembre($id_membre)
    {
        $this->id_membre = $id_membre;
    }

    /**
     * @return mixed
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }
}

