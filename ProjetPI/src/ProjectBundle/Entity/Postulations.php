<?php

namespace ProjectBundle\Entity;

use AppBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Postulations
 *
 * @ORM\Table(name="postulations")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\PostulationsRepository")
 */
class Postulations
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
     * @var int
     *
     * @ORM\Column(name="etatPos", type="integer")
     */
    private $etatPos;



    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=1024)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="choice", type="string", length=1024)
     */
    private $choice;



    /**
     * @var string
     *
     * @ORM\Column(name="lvlEng", type="string", length=255)
     */
    private $lvlEng;

    /**
     * @var string
     *
     * @ORM\Column(name="chooseYou", type="string", length=1000)
     */
    private $chooseYou;

    /**
     * @return string
     */
    public function getChooseYou()
    {
        return $this->chooseYou;
    }

    /**
     * @param string $chooseYou
     */
    public function setChooseYou($chooseYou)
    {
        $this->chooseYou = $chooseYou;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="string", length=1000)
     */
    private $reason;
    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=true , onDelete="CASCADE")
     * })
     */
    private $id_user;
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
     * @param User $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return User
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Entretien
     */
    public function getIdEntretien()
    {
        return $this->id_entretien;
    }

    /**
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * @param string $presentation
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }

    /**
     * @return string
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * @param string $choice
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @param Entretien $id_entretien
     */
    public function setIdEntretien($id_entretien)
    {
        $this->id_entretien = $id_entretien;
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
     * @return Postulations
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
     * Set idOp
     *
     * @param integer $idOp
     *
     * @return Postulations
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
     * Set etatPos
     *
     * @param boolean $etatPos
     *
     * @return Postulations
     */
    public function setEtatPos($etatPos)
    {
        $this->etatPos = $etatPos;

        return $this;
    }

    /**
     * Get etatPos
     *
     * @return bool
     */
    public function getEtatPos()
    {
        return $this->etatPos;
    }

    /**
     * Set cv
     *
     * @param string $cv
     *
     * @return Postulations
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set motivation
     *
     * @param string $motivation
     *
     * @return Postulations
     */
    public function setMotivation($motivation)
    {
        $this->motivation = $motivation;

        return $this;
    }

    /**
     * Get motivation
     *
     * @return string
     */
    public function getMotivation()
    {
        return $this->motivation;
    }

    /**
     * Set domaineEtudes
     *
     * @param string $domaineEtudes
     *
     * @return Postulations
     */
    public function setDomaineEtudes($domaineEtudes)
    {
        $this->domaineEtudes = $domaineEtudes;

        return $this;
    }

    /**
     * Get domaineEtudes
     *
     * @return string
     */
    public function getDomaineEtudes()
    {
        return $this->domaineEtudes;
    }

    /**
     * Set experience
     *
     * @param integer $experience
     *
     * @return Postulations
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set lvlEng
     *
     * @param string $lvlEng
     *
     * @return Postulations
     */
    public function setLvlEng($lvlEng)
    {
        $this->lvlEng = $lvlEng;

        return $this;
    }

    /**
     * Get lvlEng
     *
     * @return string
     */
    public function getLvlEng()
    {
        return $this->lvlEng;
    }

    /**
     * Set lvlFr
     *
     * @param string $lvlFr
     *
     * @return Postulations
     */
    public function setLvlFr($lvlFr)
    {
        $this->lvlFr = $lvlFr;

        return $this;
    }

    /**
     * Get lvlFr
     *
     * @return string
     */
    public function getLvlFr()
    {
        return $this->lvlFr;
    }
    /**
     * @var User.php
     */
    private $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


}

