<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuve
 *
 * @ORM\Table(name="epreuve")
 * @ORM\Entity(repositoryClass="NtiBundle\Repository\EpreuveRepository")
 */
class Epreuve
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cours;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Epreuve
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Epreuve
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set note
     *
     * @param \NtiBundle\Entity\Note $note
     *
     * @return Epreuve
     */
    public function setNote(\NtiBundle\Entity\Note $note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return \NtiBundle\Entity\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set cours
     *
     * @param \NtiBundle\Entity\Cours $cours
     *
     * @return Epreuve
     */
    public function setCours(\NtiBundle\Entity\Cours $cours)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \NtiBundle\Entity\Cours
     */
    public function getCours()
    {
        return $this->cours;
    }
    public function __toString()
    {
        return $this->getIntitule()." ".$this->getCours()->getLibelle();
    }
}
