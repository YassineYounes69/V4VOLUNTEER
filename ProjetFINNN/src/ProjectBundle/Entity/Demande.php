<?php

namespace ProjectBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\DemandeRepository")
 */
class Demande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="photo_demande", type="string", length=500)
     * @Assert\NotBlank(message="veuillez inserer une photo")
     * @Assert\File(maxSize="500k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"}, mimeTypesMessage="Veuillez inserer une image de type jpeg, jpg, png ou GIF")
     */
    private $photoDemande;



    /**
     * @ORM\OneToMany(targetEntity="Donation", mappedBy="demandeDonation",cascade={"persist","remove"} )
     */
    private $userDemande;


    /**
     * @var enum
     *
     * @ORM\Column(name="type_demande", type="string", columnDefinition="enum('fourniture scolaire', 'vetements', 'materiel', 'nourriture')")
     * @Assert\NotBlank(message="Le type est obligatoire")
     */
    private $typeDemande;





    /**
     * @var int
     *
     * @ORM\Column(name="etat_demande", type="integer")
     */
    private $etatDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="description_demande", type="string", length=255)
     * @Assert\NotBlank(message="La description est obligatoire")
     * @Assert\Length(
     *      min = 5,
     *      max = 255,
     *      minMessage = "La description doit comporter au moins 5 caractères",
     *      maxMessage = "La description doit comporter au plus 255 caractères"
     * )
     */
    private $descriptionDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_demande", type="string", length=255)
     * @Assert\NotBlank(message="Le titre est obligatoire")
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Le titre doit comporter au moins 2 caractères",
     *      maxMessage = "Le titre doit comporter au plus 20 caractères"
     * )
     */
    private $titreDemande;

    /**
     * Demande constructor.
     * @param int $etatDemande
     */
    public function __construct($etatDemande)
    {
        $this->etatDemande = $etatDemande;
    }


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
     * Set etatDemande
     *
     * @param integer $etatDemande
     *
     * @return Demande
     */
    public function setEtatDemande($etatDemande)
    {
        $this->etatDemande = $etatDemande;

        return $this;
    }

    /**
     * Get etatDemande
     *
     * @return int
     */
    public function getEtatDemande()
    {
        return $this->etatDemande;
    }

    /**
     * Set descriptionDemande
     *
     * @param string $descriptionDemande
     *
     * @return Demande
     */
    public function setDescriptionDemande($descriptionDemande)
    {
        $this->descriptionDemande = $descriptionDemande;

        return $this;
    }

    /**
     * Get descriptionDemande
     *
     * @return string
     */
    public function getDescriptionDemande()
    {
        return $this->descriptionDemande;
    }

    /**
     * Set titreDemande
     *
     * @param string $titreDemande
     *
     * @return Demande
     */
    public function setTitreDemande($titreDemande)
    {
        $this->titreDemande = $titreDemande;

        return $this;
    }

    /**
     * Get titreDemande
     *
     * @return string
     */
    public function getTitreDemande()
    {
        return $this->titreDemande;
    }

    /**
     * @return mixed
     */
    public function getUserDemande()
    {
        return $this->userDemande;
    }

    /**
     * @param mixed $user_demande
     */
    public function setUserDemande($userDemande)
    {
        $this->userDemande = $userDemande;
    }

    /**
     * @return enum
     */
    public function getTypeDemande()
    {
        return $this->typeDemande;
    }

    /**
     * @param enum $typeDemande
     */
    public function setTypeDemande($typeDemande)
    {
        $this->typeDemande = $typeDemande;
    }

    /**
     * @return mixed
     */
    public function getPhotoDemande()
    {
        return $this->photoDemande;
    }

    /**
     * @param mixed $photoDemande
     */
    public function setPhotoDemande($photoDemande)
    {
        $this->photoDemande = $photoDemande;
    }



    public function __toString(){
        // to show the name of the Category in the select
        return strval($this->id);
        // to show the id of the Category in the select
        // return $this->id;
    }


}

