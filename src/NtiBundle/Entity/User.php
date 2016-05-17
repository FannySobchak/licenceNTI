<?php

namespace NtiBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="NtiBundle\Repository\UserRepository")
 * @ORM\InheritanceType("JOINED")
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
     * @ORM\ManyToMany(targetEntity="Cours", cascade={"persist"})
     */
    private $cours;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set actualite
     *
     * @param \NtiBundle\Entity\Actualite $actualite
     *
     * @return User
     */
    public function setActualite(\NtiBundle\Entity\Actualite $actualite)
    {
        $this->actualite = $actualite;

        return $this;
    }

    /**
     * Get actualite
     *
     * @return \NtiBundle\Entity\Actualite
     */
    public function getActualite()
    {
        return $this->actualite;
    }

    /**
     * Add cour
     *
     * @param \NtiBundle\Entity\Cours $cour
     *
     * @return User
     */
    public function addCour(\NtiBundle\Entity\Cours $cour)
    {
        $this->cours[] = $cour;

        return $this;
    }

    /**
     * Remove cour
     *
     * @param \NtiBundle\Entity\Cours $cour
     */
    public function removeCour(\NtiBundle\Entity\Cours $cour)
    {
        $this->cours->removeElement($cour);
    }

    /**
     * Get cours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCours()
    {
        return $this->cours;
    }

    /**
     * Set fichier
     *
     * @param \NtiBundle\Entity\Fichier $fichier
     *
     * @return User
     */
    public function setFichier(\NtiBundle\Entity\Fichier $fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \NtiBundle\Entity\Fichier
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set page
     *
     * @param \NtiBundle\Entity\Page $page
     *
     * @return User
     */
    public function setPage(\NtiBundle\Entity\Page $page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \NtiBundle\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }
}
