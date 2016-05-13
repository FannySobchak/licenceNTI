<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prof
 *
 * @ORM\Table(name="prof")
 * @ORM\Entity
 */
class Prof
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
     * Set idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Prof
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
}
