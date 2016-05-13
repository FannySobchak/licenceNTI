<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=25, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_cours", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCours;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NtiBundle\Entity\User", mappedBy="idCours")
     */
    private $idUser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Cours
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Get idCours
     *
     * @return integer
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Add idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Cours
     */
    public function addIdUser(\NtiBundle\Entity\User $idUser)
    {
        $this->idUser[] = $idUser;

        return $this;
    }

    /**
     * Remove idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     */
    public function removeIdUser(\NtiBundle\Entity\User $idUser)
    {
        $this->idUser->removeElement($idUser);
    }

    /**
     * Get idUser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
