<?php

namespace ProjectBundle\Entity;

use DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Opportunity
 *
 * @ORM\Table(name="opportunity")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\OpportunityRepository")
 */
class Opportunity
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
     * @var string
     *
     * @ORM\Column(name="nomOp", type="string", length=255)
     */
    private $nomop;

    /**
     * @return string
     */
    public function getNomop()
    {
        return $this->nomop;
    }

    /**
     * @param string $nomop
     */
    public function setNomop($nomop)
    {
        $this->nomop = $nomop;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=255)
     */
    private $domaine;

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="string", length=255)
     */
    private $descr;

    /**
     * @var string
     *
     * @ORM\Column(name="jd", type="string", length=255)
     */
    private $jd;

    /**
     * @var DateTime
     * @Assert\ GreaterThan(propertyPath="limitDate")
     * @ORM\Column(name="startDate", type="date")
     */
    private $startDate;

    /**
     * @var DateTime
     * @Assert\ GreaterThan(propertyPath="startDate")
     * @ORM\Column(name="endDate", type="date")
     */
    private $endDate;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="limitDate", type="date")
     */
    private $limitDate;

    /**
     * @var string
     *
     * @ORM\Column(name="adr", type="string", length=255)
     */
    private $adr;

    /**
     * @ORM\Column(name="img1", type="string", length=500)
     * @Assert\File(maxSize="5000000k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"})
     */
    private $img1;

    /**
     * @ORM\Column(name="img2", type="string", length=500)
     * @Assert\File(maxSize="5000000k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"})
     */
    private $img2;

    /**
     * @ORM\Column(name="img3", type="string", length=500)
     * @Assert\File(maxSize="5000000k", mimeTypes={"image/jpeg", "image/jpg", "image/png", "image/GIF"})
     */
    private $img3;


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
     * Set idAssoc
     *
     * @param integer $idAssoc
     *
     * @return Opportunity
     */
    public function setIdAssoc($idAssoc)
    {
        $this->idAssoc = $idAssoc;

        return $this;
    }

    /**
     * Get idAssoc
     *
     * @return int
     */
    public function getIdAssoc()
    {
        return $this->idAssoc;
    }

    /**
     * Set domaine
     *
     * @param string $domaine
     *
     * @return Opportunity
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return string
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set descr
     *
     * @param string $descr
     *
     * @return Opportunity
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set jd
     *
     * @param string $jd
     *
     * @return Opportunity
     */
    public function setJd($jd)
    {
        $this->jd = $jd;

        return $this;
    }

    /**
     * Get jd
     *
     * @return string
     */
    public function getJd()
    {
        return $this->jd;
    }

    /**
     * Set startDate
     *
     * @param DateTime $startDate
     *
     * @return Opportunity
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param DateTime $endDate
     *
     * @return Opportunity
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set limitDate
     *
     * @param DateTime $limitDate
     *
     * @return Opportunity
     */
    public function setLimitDate($limitDate)
    {
        $this->limitDate = $limitDate;

        return $this;
    }

    /**
     * Get limitDate
     *
     * @return DateTime
     */
    public function getLimitDate()
    {
        return $this->limitDate;
    }

    /**
     * Set adr
     *
     * @param string $adr
     *
     * @return Opportunity
     */
    public function setAdr($adr)
    {
        $this->adr = $adr;

        return $this;
    }

    /**
     * Get adr
     *
     * @return string
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Set img1
     *
     * @param string $img1
     *
     * @return Opportunity
     */
    public function setImg1($img1)
    {
        $this->img1 = $img1;

        return $this;
    }

    /**
     * Get img1
     *
     * @return string
     */
    public function getImg1()
    {
        return $this->img1;
    }

    /**
     * Set img2
     *
     * @param string $img2
     *
     * @return Opportunity
     */
    public function setImg2($img2)
    {
        $this->img2 = $img2;

        return $this;
    }

    /**
     * Get img2
     *
     * @return string
     */
    public function getImg2()
    {
        return $this->img2;
    }

    /**
     * Set img3
     *
     * @param string $img3
     *
     * @return Opportunity
     */
    public function setImg3($img3)
    {
        $this->img3 = $img3;

        return $this;
    }

    /**
     * Get img3
     *
     * @return string
     */
    public function getImg3()
    {
        return $this->img3;
    }
}

