<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", uniqueConstraints={@ORM\UniqueConstraint(name="id_epreuve", columns={"id_epreuve"}), @ORM\UniqueConstraint(name="id_session", columns={"id_session"}), @ORM\UniqueConstraint(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Note
{
    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", precision=10, scale=0, nullable=false)
     */
    private $note;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_note", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNote;

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
     * @var \NtiBundle\Entity\Session
     *
     * @ORM\ManyToOne(targetEntity="NtiBundle\Entity\Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_session", referencedColumnName="id_session")
     * })
     */
    private $idSession;

    /**
     * @var \NtiBundle\Entity\Epreuve
     *
     * @ORM\ManyToOne(targetEntity="NtiBundle\Entity\Epreuve")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_epreuve", referencedColumnName="id_epreuve")
     * })
     */
    private $idEpreuve;



    /**
     * Set note
     *
     * @param float $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Get idNote
     *
     * @return integer
     */
    public function getIdNote()
    {
        return $this->idNote;
    }

    /**
     * Set idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Note
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
     * Set idSession
     *
     * @param \NtiBundle\Entity\Session $idSession
     *
     * @return Note
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

    /**
     * Set idEpreuve
     *
     * @param \NtiBundle\Entity\Epreuve $idEpreuve
     *
     * @return Note
     */
    public function setIdEpreuve(\NtiBundle\Entity\Epreuve $idEpreuve = null)
    {
        $this->idEpreuve = $idEpreuve;

        return $this;
    }

    /**
     * Get idEpreuve
     *
     * @return \NtiBundle\Entity\Epreuve
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }
}
