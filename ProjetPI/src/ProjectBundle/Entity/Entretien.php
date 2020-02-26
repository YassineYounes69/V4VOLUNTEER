<?php

namespace ProjectBundle\Entity;

use AppBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;
/**
 * Entretien
 *
 * @ORM\Table(name="entretien")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\EntretienRepository")
 */

class Entretien
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
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAssoc", referencedColumnName="id" , onDelete="CASCADE")
     * })
     */
    private $idAssoc;

    /**
     * @var \ProjectBundle\Entity\Opportunity
     *
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Opportunity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idOp", referencedColumnName="id" , onDelete="CASCADE")
     * })
     */
    private $idOp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnt", type="date")
     */
    private $dateEnt;

    /**
     * @var int
     *
     * @ORM\Column(name="etatEnt", type="integer")
     */
    private $etatEnt;
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id", nullable=true)
     * })
     */
    private $id_membre;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set idVol
     *
     * @param integer $idVol
     *
     * @return Entretien
     */
    public function setIdVol($idVol)
    {
        $this->idVol = $idVol;

        return $this;
    }

    /**
     * Get idVol
     *
     * @return int
     */
    public function getIdVol()
    {
        return $this->idVol;
    }

    /**
     * Set idAssoc
     *
     * @param User $idAssoc
     *
     * @return Entretien
     */
    public function setIdAssoc($idAssoc)
    {
        $this->idAssoc = $idAssoc;

        return $this;
    }

    /**
     * Get idAssoc
     *
     * @return Entretien
     */
    public function getIdAssoc()
    {
        return $this->idAssoc;
    }

    /**
     * Set idOp
     *
     * @param integer $idOp
     *
     * @return Entretien
     */
    public function setIdOp($idOp)
    {
        $this->idOp = $idOp;

        return $this;
    }

    /**
     * Get idOp
     *
     * @return int
     */
    public function getIdOp()
    {
        return $this->idOp;
    }

    /**
     * Set dateEnt
     *
     * @param \DateTime $dateEnt
     *
     * @return Entretien
     */
    public function setDateEnt($dateEnt)
    {
        $this->dateEnt = $dateEnt;

        return $this;
    }

    /**
     * Get dateEnt
     *
     * @return \DateTime
     */
    public function getDateEnt()
    {
        return $this->dateEnt;
    }

    /**
     * Set etatEnt
     *
     * @param integer $etatEnt
     *
     * @return Entretien
     */
    public function setEtatEnt($etatEnt)
    {
        $this->etatEnt = $etatEnt;

        return $this;
    }

    /**
     * Get etatEnt
     *
     * @return int
     */
    public function getEtatEnt()
    {
        return $this->etatEnt;
    }
}
