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
}
