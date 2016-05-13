<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichier
 *
 * @ORM\Table(name="fichier", indexes={@ORM\Index(name="FK_fichier_id_user", columns={"id_user"}), @ORM\Index(name="FK_fichier_id_cours", columns={"id_cours"})})
 * @ORM\Entity
 */
class Fichier
{
    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=25, nullable=false)
     */
    private $chemin;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_fichier", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFichier;

    /**
     * @var \NtiBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="NtiBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \NtiBundle\Entity\Cours
     *
     * @ORM\ManyToOne(targetEntity="NtiBundle\Entity\Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="id_cours")
     * })
     */
    private $idCours;



    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Fichier
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Get idFichier
     *
     * @return integer
     */
    public function getIdFichier()
    {
        return $this->idFichier;
    }

    /**
     * Set idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Fichier
     */
    public function setIdUser(\NtiBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \NtiBundle\Entity\User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idCours
     *
     * @param \NtiBundle\Entity\Cours $idCours
     *
     * @return Fichier
     */
    public function setIdCours(\NtiBundle\Entity\Cours $idCours = null)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return \NtiBundle\Entity\Cours
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}
