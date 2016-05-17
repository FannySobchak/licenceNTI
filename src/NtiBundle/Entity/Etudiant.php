<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Entity(repositoryClass="NtiBundle\Repository\EtudiantRepository")
 */
class Etudiant extends User
{
    /**
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumn(nullable=false)
     */
    private $session;

    /**
     * Set session
     *
     * @param \NtiBundle\Entity\Session $session
     *
     * @return Etudiant
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
