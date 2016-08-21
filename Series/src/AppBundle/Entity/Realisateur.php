<?php

use AppBundle\Entity\Episode;
use AppBundle\Entity\Realisateur;
use AppBundle\Repository\RealisateurRepository;
use Doctrine\ORM\Mapping\ManyToOne;

namespace AppBundle\Entity;


class Realisateur
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
     * @var string
     *
     * @ORM\Column(name="nomRealisateur", type="string", length=255)
     */
    private $nomRealisateur;
    
    /**
     * @ManyToOne(targetEntity="Episode", inversedBy="realisateurs")
     * 
     */
    private $episodes;
    /**
     * @var string
     *
     * @ORM\Column(name="prenomRealisateur", type="string", length=255)
     */
    private $prenomRealisateur;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomRealisateur
     *
     * @param string $nomRealisateur
     * @return Realisateur
     */
    public function setNomRealisateur($nomRealisateur)
    {
        $this->nomRealisateur = $nomRealisateur;

        return $this;
    }

    /**
     * Get nomRealisateur
     *
     * @return string 
     */
    public function getNomRealisateur()
    {
        return $this->nomRealisateur;
    }

    /**
     * Set prenomRealisateur
     *
     * @param string $prenomRealisateur
     * @return Realisateur
     */
    public function setPrenomRealisateur($prenomRealisateur)
    {
        $this->prenomRealisateur = $prenomRealisateur;

        return $this;
    }

    /**
     * Get prenomRealisateur
     *
     * @return string 
     */
    public function getPrenomRealisateur()
    {
        return $this->prenomRealisateur;
    }
}