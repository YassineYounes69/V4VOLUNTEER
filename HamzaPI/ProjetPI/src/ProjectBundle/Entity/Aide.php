<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Aide
 *
 * @ORM\Table(name="aide")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\AideRepository")
 */
class Aide
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
     * @var string
     * @Assert\Range(
     *      min = 1,
     *      max = 999999999999999999)
     * @ORM\Column(name="donation", type="integer")
     */
    private $donation;

    /**
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
     * @var \AppBundle\Entity\User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=true , onDelete="CASCADE")
     * })
     */
    private $id_user;
    /**
     * @var \ProjectBundle\Entity\Agee
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Agee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_PA", referencedColumnName="id", nullable=true , onDelete="CASCADE")
     * })
     */
    private $id_PA;

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
     * @param string $id_Aide
     */
    public function setIdAide($id_Aide)
    {
        $this->id_Aide = $id_Aide;
    }

    /**
     * @param \AppBundle\Entity\User $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @return Agee
     */
    public function getIdPA()
    {
        return $this->id_PA;
    }

    /**
     * @param Agee $id_PA
     */
    public function setIdPA($id_PA)
    {
        $this->id_PA = $id_PA;
    }


}

