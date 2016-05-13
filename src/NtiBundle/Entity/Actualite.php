<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite", indexes={@ORM\Index(name="FK_actualite_id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=500, nullable=true)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_actu", type="date", nullable=false)
     */
    private $dateActu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_actu", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActu;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Actualite
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set dateActu
     *
     * @param \DateTime $dateActu
     *
     * @return Actualite
     */
    public function setDateActu($dateActu)
    {
        $this->dateActu = $dateActu;

        return $this;
    }

    /**
     * Get dateActu
     *
     * @return \DateTime
     */
    public function getDateActu()
    {
        return $this->dateActu;
    }

    /**
     * Get idActu
     *
     * @return integer
     */
    public function getIdActu()
    {
        return $this->idActu;
    }

    /**
     * Set idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Actualite
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
}
