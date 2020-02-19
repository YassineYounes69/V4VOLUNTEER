<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Logement
 *
 * @ORM\Table(name="logement")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\LogementRepository")
 */
class Logement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_log;

    /**
     * @return int
     */
    public function getIdLog()
    {
        return $this->id_log;
    }

    /**
     * @return \AppBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param \AppBundle\Entity\User $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @param int $id_log
     */

    /**
     * @ORM\ManyToOne(targetEntity=ProjectBundle\Entity\Refugies::class)
     * @ORM\JoinColumn(name="id_ref",referencedColumnName="id_ref")
     */
    private $id_ref;

    /**
     * @var \AppBundle\Entity\User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     *
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id", nullable=true , onDelete="CASCADE")
     * })
     */
    private $id_user;

    public function setIdLog($id_log)
    {
        $this->id_log = $id_log;
    }

    /**
     * @return mixed
     */
    public function getIdRef()
    {
        return $this->id_ref;
    }

    /**
     * @param mixed $id_ref
     */
    public function setIdRef($id_ref)
    {
        $this->id_ref = $id_ref;
    }

    /**
     * @return mixed
     */
    public function getNomLog()
    {
        return $this->nomLog;
    }

    /**
     * @param mixed $nomLog
     */
    public function setNomLog($nomLog)
    {
        $this->nomLog = $nomLog;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getEtatLog()
    {
        return $this->etatLog;
    }

    /**
     * @param string $etatLog
     */
    public function setEtatLog($etatLog)
    {
        $this->etatLog = $etatLog;
    }

    /**
     * @return int
     */
    public function getNbChambre()
    {
        return $this->nbChambre;0
    }

    /**
     * @param int $nbChambre
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;
    }


    /**
     * @var string
     *
     * @Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
     * @ORM\Column(name="nom_log", type="string", length=255)
     */
    private $nomLog;

    /**
     * @var string
     *
     * @Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *@Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
     * @ORM\Column(name="etat_log", type="string", length=255)
     */
    private $etatLog;

    /**
     * @var int
     *
     * @Assert\GreaterThan(value=0,
     * message="Le nombre doit etre supérieur à 0 "
     * )
     *
     *
     *
     * @ORM\Column(name="nb__chambre", type="integer")
     */
    private $nbChambre;







}

