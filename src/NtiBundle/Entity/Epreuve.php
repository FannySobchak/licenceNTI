<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Epreuve
 *
 * @ORM\Table(name="epreuve", indexes={@ORM\Index(name="FK_epreuve_id_cours", columns={"id_cours"})})
 * @ORM\Entity
 */
class Epreuve
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEpreuve", type="date", nullable=false)
     */
    private $dateepreuve;

    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=25, nullable=true)
     */
    private $intitule;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_epreuve", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEpreuve;

    /**
     * @var \NtiBundle\Entity\Cours
     *
     * @ORM\ManyToOne(targetEntity="NtiBundle\Entity\Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cours", referencedColumnName="id_cours")
     * })
     */
    private $idCours;



    /**
     * Set dateepreuve
     *
     * @param \DateTime $dateepreuve
     *
     * @return Epreuve
     */
    public function setDateepreuve($dateepreuve)
    {
        $this->dateepreuve = $dateepreuve;

        return $this;
    }

    /**
     * Get dateepreuve
     *
     * @return \DateTime
     */
    public function getDateepreuve()
    {
        return $this->dateepreuve;
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
     * Get idEpreuve
     *
     * @return integer
     */
    public function getIdEpreuve()
    {
        return $this->idEpreuve;
    }

    /**
     * Set idCours
     *
     * @param \NtiBundle\Entity\Cours $idCours
     *
     * @return Epreuve
     */
    public function setIdCours(\NtiBundle\Entity\Cours $idCours = null)
    {
        $this->idCours = $idCours;

        return $this;
    }

    /**
     * Get idCours
     *
     * @return \NtiBundle\Entity\Cours
     */
    public function getIdCours()
    {
        return $this->idCours;
    }
}
