<?php

use AppBundle\Entity\Producteur;
use AppBundle\Entity\Serie;
use AppBundle\Repository\ProducteurRepository;
use Doctrine\ORM\Mapping\ManyToMany;

namespace AppBundle\Entity;


class Producteur
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
     * @ORM\Column(name="nomProducteur", type="string", length=255)
     */
    private $nomProducteur;
    
    /**
     * @ManyToMany(targetEntity="Serie", inversedBy="producteurs")
     * 
     */
    private $series;
    /**
     * @var string
     *
     * @ORM\Column(name="prenomProducteur", type="string", length=255)
     */
    private $prenomProducteur;


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
     * Set nomProducteur
     *
     * @param string $nomProducteur
     * @return Producteur
     */
    public function setNomProducteur($nomProducteur)
    {
        $this->nomProducteur = $nomProducteur;

        return $this;
    }

    /**
     * Get nomProducteur
     *
     * @return string 
     */
    public function getNomProducteur()
    {
        return $this->nomProducteur;
    }

    /**
     * Set prenomProducteur
     *
     * @param string $prenomProducteur
     * @return Producteur
     */
    public function setPrenomProducteur($prenomProducteur)
    {
        $this->prenomProducteur = $prenomProducteur;

        return $this;
    }

    /**
     * Get prenomProducteur
     *
     * @return string 
     */
    public function getPrenomProducteur()
    {
        return $this->prenomProducteur;
    }
}
