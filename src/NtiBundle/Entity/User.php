<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=25, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=25, nullable=false)
     */
    private $mdp;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=25, nullable=true)
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="droit", type="integer", nullable=false)
     */
    private $droit;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=25, nullable=true)
     */
    private $photo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NtiBundle\Entity\Cours", inversedBy="idUser")
     * @ORM\JoinTable(name="enseigner",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_cours", referencedColumnName="id_cours")
     *   }
     * )
     */
    private $idCours;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCours = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     *
     * @return User
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set droit
     *
     * @param integer $droit
     *
     * @return User
     */
    public function setDroit($droit)
    {
        $this->droit = $droit;

        return $this;
    }

    /**
     * Get droit
     *
     * @return integer
     */
    public function getDroit()
    {
        return $this->droit;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Add idCour
     *
     * @param \NtiBundle\Entity\Cours $idCour
     *
     * @return User
     */
    public function addIdCour(\NtiBundle\Entity\Cours $idCour)
    {
        $this->idCours[] = $idCour;

        return $this;
    }

    /**
     * Remove idCour
     *
     * @param \NtiBundle\Entity\Cours $idCour
     */
    public function removeIdCour(\NtiBundle\Entity\Cours $idCour)
    {
        $this->idCours->removeElement($idCour);
    }

    /**
     * Get idCours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}
