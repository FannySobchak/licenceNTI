<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="NtiBundle\Repository\NoteRepository")
 */
class Note
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
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;

    /**
     * @ORM\ManyToOne(targetEntity="Epreuve")
     * @ORM\JoinColumn(nullable=false)
     */
    private $epreuve;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumn(nullable=false)
     */
    private $session;


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
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return Note
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return int
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set epreuve
     *
     * @param \NtiBundle\Entity\Epreuve $epreuve
     *
     * @return Note
     */
    public function setEpreuve(\NtiBundle\Entity\Epreuve $epreuve)
    {
        $this->epreuve = $epreuve;

        return $this;
    }

    /**
     * Get epreuve
     *
     * @return \NtiBundle\Entity\Epreuve
     */
    public function getEpreuve()
    {
        return $this->epreuve;
    }

    /**
     * Set etudiant
     *
     * @param \NtiBundle\Entity\Etudiant $etudiant
     *
     * @return Note
     */
    public function setEtudiant(\NtiBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \NtiBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set session
     *
     * @param \NtiBundle\Entity\Session $session
     *
     * @return Note
     */
    public function setSession(\NtiBundle\Entity\Session $session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return \NtiBundle\Entity\Session
     */
    public function getSession()
    {
        return $this->session;
    }
}
