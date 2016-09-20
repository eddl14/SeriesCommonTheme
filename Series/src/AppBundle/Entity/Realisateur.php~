<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Episode;
use AppBundle\Entity\Realisateur;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



/**
 * Realisateur
 *
 * @ORM\Table(name="realisateur")
 * @ORM\Entity(repositoryClass="RealisateurRepository")
 */
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
     * @ManyToMany(targetEntity="Episode", inversedBy="realisateurs")
     * 
     */
    private $episodes;
    /**
     * @var string
     *
     * @ORM\Column(name="nomRealisateur", type="string", length=255)
     */
    private $nomRealisateur;
    /**
     * @var string
     *
     * @ORM\Column(name="prenomRealisateur", type="string", length=255)
     */
    private $prenomRealisateur;


    /**
     * @var string
     * 
     * @Assert\Url(
     *  message = "The url '{{ value }}' is not a valid url",
     * )
     */
    private $photo;
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
    
     /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Realisateur
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add episodes
     *
     * @param \AppBundle\Entity\Episode $episodes
     * @return Realisateur
     */
    public function addEpisode(\AppBundle\Entity\Episode $episodes)
    {
        $this->episodes[] = $episodes;

        return $this;
    }

    /**
     * Remove episodes
     *
     * @param \AppBundle\Entity\Episode $episodes
     */
    public function removeEpisode(\AppBundle\Entity\Episode $episodes)
    {
        $this->episodes->removeElement($episodes);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }
}
