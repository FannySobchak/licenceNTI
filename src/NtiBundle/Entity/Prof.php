<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prof
 *
 * @ORM\Entity
 */
class Prof extends User
{
    /**
     * @ORM\ManyToMany(targetEntity="Cours", cascade={"persist"})
     */
    private $cours;
}
