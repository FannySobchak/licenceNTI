<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant", indexes={@ORM\Index(name="FK_etudiant_id_session", columns={"id_session"})})
 * @ORM\Entity
 */
class Etudiant
{
    /**
     * @var \NtiBundle\Entity\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="NtiBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \NtiBundle\Entity\Session
     *
     * @ORM\ManyToOne(targetEntity="NtiBundle\Entity\Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_session", referencedColumnName="id_session")
     * })
     */
    private $idSession;



    /**
     * Set idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Etudiant
     */
    public function setIdUser(\NtiBundle\Entity\User $idUser)
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
     * Set idSession
     *
     * @param \NtiBundle\Entity\Session $idSession
     *
     * @return Etudiant
     */
    public function setIdSession(\NtiBundle\Entity\Session $idSession = null)
    {
        $this->idSession = $idSession;

        return $this;
    }

    /**
     * Get idSession
     *
     * @return \NtiBundle\Entity\Session
     */
    public function getIdSession()
    {
        return $this->idSession;
    }
}
