<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Symfony\Component\Validator\Constraints as Assert;
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @ORM\Column(name="description", type="string", length=255)
=======
     * @ORM\Column(name="description", type="text", length=1000, nullable=false)
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="capacite", type="integer")
     */
    private $capacite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
<<<<<<< HEAD
     * @var \DateTime
     *
     * @ORM\Column(name="heureDebut", type="time")
     */
    private $heureDebut;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;
=======
     * @var int
     *
     * @ORM\Column(name="nbParticipant", type="integer")
     */
    private $nbParticipant;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;
    /**
     * @var string
     *
     * @ORM\Column(name="createur", type="string", length=255)
     */
    private $createur;

    /**
     * @return string
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * @param string $createur
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;
    }



    public function __toString()
    {
return $this->description ;
    }
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
=======
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @return int
     */
    public function getNbParticipant()
    {
        return $this->nbParticipant;
    }

    /**
     * @param string $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @param int $nbParticipant
     */
    public function setNbParticipant($nbParticipant)
    {
        $this->nbParticipant = $nbParticipant;
    }

>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
<<<<<<< HEAD
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id", nullable=true)
=======
     *  @ORM\JoinColumn(name="id_membre", referencedColumnName="id", nullable=true)
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     * })
     */
    private $id_membre;

    /**
     * @return mixed
     */
    public function getIdMembre()
    {
        return $this->id_membre;
    }

    /**
     * @param mixed $id_membre
     */
    public function setIdMembre($id_membre)
    {
        $this->id_membre = $id_membre;
    }

    /**
     * @param int $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Evenement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
<<<<<<< HEAD
     * Set description
     *
     * @param string $description
     *
     * @return Evenement
=======
     * @param string $description
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     */
    public function setDescription($description)
    {
        $this->description = $description;
<<<<<<< HEAD

        return $this;
    }

    /**
     * Get description
     *
=======
    }

    /**
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

<<<<<<< HEAD
=======

>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Evenement
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return int
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return Evenement
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

<<<<<<< HEAD
    /**
     * Set heureDebut
     *
     * @param \DateTime $heureDebut
     *
     * @return Evenement
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get heureDebut
     *
     * @return \DateTime
     */
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Evenement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return int
     */
    public function getDuree()
    {
        return $this->duree;
    }
=======




>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
}

