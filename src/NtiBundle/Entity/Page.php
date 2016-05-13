<?php

namespace NtiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page", indexes={@ORM\Index(name="FK_page_id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Page
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre_page", type="string", length=25, nullable=false)
     */
    private $titrePage;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=500, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_page", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPage;

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
     * Set titrePage
     *
     * @param string $titrePage
     *
     * @return Page
     */
    public function setTitrePage($titrePage)
    {
        $this->titrePage = $titrePage;

        return $this;
    }

    /**
     * Get titrePage
     *
     * @return string
     */
    public function getTitrePage()
    {
        return $this->titrePage;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Page
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Get idPage
     *
     * @return integer
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set idUser
     *
     * @param \NtiBundle\Entity\User $idUser
     *
     * @return Page
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
}
