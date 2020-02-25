<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Donation
 *
 * @ORM\Table(name="donation")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\DonationRepository")
 */
class Donation
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", cascade={"persist"} ,inversedBy="demandeUser", fetch="LAZY" )
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",nullable=true)
     */
    private $userDonation;

    /**
     * @ORM\ManyToOne(targetEntity="Demande", cascade={"persist"}, fetch="LAZY")
     * @ORM\JoinColumn(name="demande_id", referencedColumnName="id")
     */
    private $demandeDonation;


    /**
     * @var enum
     *
     * @ORM\Column(name="type_donation", type="string", columnDefinition="enum('fourniture scolaire', 'vetements', 'materiel', 'nourriture')")
     */
    private $typeDonation;

    /**
     * @var int
     *
     * @ORM\Column(name="etat_donation", type="integer")
     */
    private $etatDonation;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_donation", type="integer")
     * @Assert\GreaterThan(value=0, message="La quantité doit etre superieure à 0")
     * @Assert\LessThan(value=300, message="La quantité doit etre inferieure à 300")
     * @Assert\NotBlank(message="La quantité est obligatoire")
     */
    private $quantiteDonation;

    /**
     * Donation constructor.
     * @param $demandeDonation
     */
    public function __construct($demandeDonation,$userDonation,$etatDonation,$typeDonation)
    {
        $this->demandeDonation = $demandeDonation;
        $this->userDonation = $userDonation;
        $this->etatDonation = $etatDonation;
        $this->typeDonation = $typeDonation;
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
     * Set etatDonation
     *
     * @param integer $etatDonation
     *
     * @return Donation
     */
    public function setEtatDonation($etatDonation)
    {
        $this->etatDonation = $etatDonation;

        return $this;
    }

    /**
     * Get etatDonation
     *
     * @return int
     */
    public function getEtatDonation()
    {
        return $this->etatDonation;
    }

    /**
     * Set quantiteDonation
     *
     * @param integer $quantiteDonation
     *
     * @return Donation
     */
    public function setQuantiteDonation($quantiteDonation)
    {
        $this->quantiteDonation = $quantiteDonation;

        return $this;
    }

    /**
     * Get quantiteDonation
     *
     * @return int
     */
    public function getQuantiteDonation()
    {
        return $this->quantiteDonation;
    }

    /**
     * @return mixed
     */
    public function getUserDonation()
    {
        return $this->userDonation;
    }

    /**
     * @param mixed $userDonation
     */
    public function setUserDonation($userDonation)
    {
        $this->userDonation = $userDonation;
    }

    /**
     * @return mixed
     */
    public function getDemandeDonation()
    {
        return $this->demandeDonation;
    }

    /**
     * @param mixed $demandeDonation
     */
    public function setDemandeDonation($demandeDonation)
    {
        $this->demandeDonation = $demandeDonation;
    }




    /**
     * @return enum
     */
    public function getTypeDonation()
    {
        return $this->typeDonation;
    }

    /**
     * @param enum $typeDonation
     */
    public function setTypeDonation($typeDonation)
    {
        $this->typeDonation = $typeDonation;
    }



}

