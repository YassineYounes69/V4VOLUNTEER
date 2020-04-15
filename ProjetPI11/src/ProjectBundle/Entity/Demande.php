<?php

namespace ProjectBundle\Entity;


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
     * @ORM\OneToMany(targetEntity="Donation", mappedBy="demandeDonation",cascade={"persist","remove"} )
     */
    private $userDemande;


    /**
     * @var enum
     *
     * @ORM\Column(name="type_demande", type="string", columnDefinition="enum('fourniture scolaire', 'vetements', 'materiel', 'nourriture')")
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
     */
    private $descriptionDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_demande", type="string", length=255)
     */
    private $titreDemande;



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





}

