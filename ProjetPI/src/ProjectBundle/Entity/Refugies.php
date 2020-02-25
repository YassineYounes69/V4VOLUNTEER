<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
=======
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87

/**
 * Refugies
 *
 * @ORM\Table(name="refugies")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\RefugiesRepository")
 */
class Refugies
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ref", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id_ref;
    /**
     * @var string
     *
     * @ORM\Column(name="pays_ref", type="string", length=255)
     */
    private $paysRef;

    /**
     * @return int
     */
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id", nullable=true)
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

<<<<<<< HEAD
    public function __toString()
    {
        return $this->nomRef;
    }

=======
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
    /**
     * @param int $ageRef
     */
    public function setAgeRef($ageRef)
    {
        $this->ageRef = $ageRef;
    }

    /**
     * @param string $etatRef
     */
    public function setEtatRef($etatRef)
    {
        $this->etatRef = $etatRef;
    }


    public function getAgeRef()
    {
        return $this->ageRef;
    }

    /**
     * @return int
     */
    public function getIdRef()
    {
        return $this->id_ref;
    }

    /**
     * @param int $id_ref
     */
    public function setIdRef($id_ref)
    {
        $this->id_ref = $id_ref;
    }

    /**
     * @return string
     */
    public function getPaysRef()
    {
        return $this->paysRef;
    }

    /**
     * @param string $paysRef
     */
    public function setPaysRef($paysRef)
    {
        $this->paysRef = $paysRef;
    }

    /**
     * @return string
     */
    public function getNomRef()
    {
        return $this->nomRef;
    }

    /**
     * @param string $nomRef
     */
    public function setNomRef($nomRef)
    {
        $this->nomRef = $nomRef;
    }

    /**
     * @return string
     */
    public function getPrenomRef()
    {
        return $this->prenomRef;
    }

    /**
     * @param string $prenomRef
     */
    public function setPrenomRef($prenomRef)
    {
        $this->prenomRef = $prenomRef;
    }

    /**
     * @return string
     */
    public function getGenderRef()
    {
        return $this->genderRef;
    }

    /**
     * @param string $genderRef
     */
    public function setGenderRef($genderRef)
    {
        $this->genderRef = $genderRef;
    }

    /**
     * @return string
     */
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

    /**
     * @return string
     */
    public function getEtatRef()
    {
        return $this->etatRef;
    }

    /**
     * @var string
<<<<<<< HEAD
     *@Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
=======
     *
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     * @ORM\Column(name="etat_ref", type="string", length=255)
     */
    private $etatRef;

    /**
     * @var string
     *
<<<<<<< HEAD
     * @Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
     *
=======
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     * @ORM\Column(name="nom_ref", type="string", length=255)
     */
    private $nomRef;

    /**
<<<<<<< HEAD
     * @Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
     *
=======
     * @var string
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     *
     * @ORM\Column(name="prenom_ref", type="string", length=255)
     */
    private $prenomRef;

    /**
     * @var int
     *
<<<<<<< HEAD
     *
     * @Assert\GreaterThan(value=0,
     * message="Le nombre doit etre supérieur à 0 "
     *)
     *
     *
=======
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     * @ORM\Column(name="age_ref", type="integer")
     */
    private $ageRef;

    /**
     * @var string
     *
<<<<<<< HEAD
     *@Assert\Type("alpha",
     * message="ce champs doit etre de type string ")
     *
=======
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87
     * @ORM\Column(name="gender_ref", type="string", length=255)
     */
    private $genderRef;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255,nullable=true)
     */
    private $image;

<<<<<<< HEAD
    public static function loadValidatorMetadataAction(ClassMetadata $metadata)
    {

        $metadata->addPropertyConstraint('prenomRef', new Assert\Type('string'));

        $metadata->addPropertyConstraint('ageRef', new Assert\Type([
            'type' => 'integer',
            'message' => 'The value {{ value }} is not a valid {{ type }}.',
        ]));
    }
=======
>>>>>>> af282b06661706d128dc0ce87d0d0196d5239e87


}

