<?php

namespace AppBundle\Entity;

use AppBundle\Repository\ActeurRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * Acteur
 *
 * @ORM\Table(name="acteur")
 * @ORM\Entity(repositoryClass="ActeurRepository")
 */
class Acteur
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
     * @ManyToMany(targetEntity="Serie", mappedBy="acteurs")
     * 
     */
    private $series;
    /**
     * @var string
     *
     * @ORM\Column(name="nomActeur", type="string", length=255)
     */
    private $nomActeur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomActeur", type="string", length=255)
     */
    private $prenomActeur;


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
     * Set nomActeur
     *
     * @param string $nomActeur
     * @return Acteur
     */
    public function setNomActeur($nomActeur)
    {
        $this->nomActeur = $nomActeur;

        return $this;
    }

    /**
     * Get nomActeur
     *
     * @return string 
     */
    public function getNomActeur()
    {
        return $this->nomActeur;
    }

    /**
     * Set prenomActeur
     *
     * @param string $prenomActeur
     * @return Acteur
     */
    public function setPrenomActeur($prenomActeur)
    {
        $this->prenomActeur = $prenomActeur;

        return $this;
    }

    /**
     * Get prenomActeur
     *
     * @return string 
     */
    public function getPrenomActeur()
    {
        return $this->prenomActeur;
    }
}