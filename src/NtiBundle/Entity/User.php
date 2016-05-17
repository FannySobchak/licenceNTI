<?php

namespace NtiBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="NtiBundle\Repository\UserRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "etudiant" = "Etudiant", "prof" = "Prof"})
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Actualite")
     * @ORM\JoinColumn(nullable=false)
     */
    private $actualite;

    /**
     * @ORM\ManyToMany(targetEntity="Cours", cascade={"persist"})
     */
    private $cours;

    /**
     * @ORM\ManyToOne(targetEntity="Fichier")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fichier;

    /**
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumn(nullable=false)
     */
    private $page;

    public function __construct()
    {
        parent::__construct();
    }
}

