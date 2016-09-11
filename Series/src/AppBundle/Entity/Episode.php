<?php
namespace AppBundle\Entity;

use AppBundle\Entity\Episode;
use AppBundle\Entity\Realisateur;
use AppBundle\Entity\Saison;
use AppBundle\Entity\Utilisateur;
use AppBundle\Repository\EpisodeRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;



/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="EpisodeRepository")
 */
class Episode
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
     * @var int
     *
     * @ORM\Column(name="numeroEpisode", type="integer")
     */
    private $numeroEpisode;
    /**
     * @ManyToMany(targetEntity="Utilisateur", mappedBy="episodes")
     * 
     */
    private $utilisateurs;
    
    /**
     * @ManyToMany(targetEntity="Realisateur", mappedBy="episodes")
     * 
     */
    private $realisateurs;
    /**
     * @ManyToOne(targetEntity="Saison", inversedBy="episodes")
     * 
     */
    private $saisons;
    /**
     * @var string
     *
     * @ORM\Column(name="nomEpisode", type="string", length=255)
     */
    private $nomEpisode;

    /**
     * @var string
     *
     * @ORM\Column(name="nomOriginalEpisode", type="string", length=255)
     */
    private $nomOriginalEpisode;

    /**
     * @var string
     *
     * @ORM\Column(name="resumeEpisode", type="string", length=255)
     */
    private $resumeEpisode;


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
     * Set numeroEpisode
     *
     * @param integer $numeroEpisode
     * @return Episode
     */
    public function setNumeroEpisode($numeroEpisode)
    {
        $this->numeroEpisode = $numeroEpisode;

        return $this;
    }

    /**
     * Get numeroEpisode
     *
     * @return integer 
     */
    public function getNumeroEpisode()
    {
        return $this->numeroEpisode;
    }

    /**
     * Set nomEpisode
     *
     * @param string $nomEpisode
     * @return Episode
     */
    public function setNomEpisode($nomEpisode)
    {
        $this->nomEpisode = $nomEpisode;

        return $this;
    }

    /**
     * Get nomEpisode
     *
     * @return string 
     */
    public function getNomEpisode()
    {
        return $this->nomEpisode;
    }

    /**
     * Set nomOriginalEpisode
     *
     * @param string $nomOriginalEpisode
     * @return Episode
     */
    public function setNomOriginalEpisode($nomOriginalEpisode)
    {
        $this->nomOriginalEpisode = $nomOriginalEpisode;

        return $this;
    }

    /**
     * Get nomOriginalEpisode
     *
     * @return string 
     */
    public function getNomOriginalEpisode()
    {
        return $this->nomOriginalEpisode;
    }

    /**
     * Set resumeEpisode
     *
     * @param string $resumeEpisode
     * @return Episode
     */
    public function setResumeEpisode($resumeEpisode)
    {
        $this->resumeEpisode = $resumeEpisode;

        return $this;
    }

    /**
     * Get resumeEpisode
     *
     * @return string 
     */
    public function getResumeEpisode()
    {
        return $this->resumeEpisode;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->realisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add utilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurs
     * @return Episode
     */
    public function addUtilisateur(\AppBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;

        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurs
     */
    public function removeUtilisateur(\AppBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * Add realisateurs
     *
     * @param \AppBundle\Entity\Realisateur $realisateurs
     * @return Episode
     */
    public function addRealisateur(\AppBundle\Entity\Realisateur $realisateurs)
    {
        $this->realisateurs[] = $realisateurs;

        return $this;
    }

    /**
     * Remove realisateurs
     *
     * @param \AppBundle\Entity\Realisateur $realisateurs
     */
    public function removeRealisateur(\AppBundle\Entity\Realisateur $realisateurs)
    {
        $this->realisateurs->removeElement($realisateurs);
    }

    /**
     * Get realisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRealisateurs()
    {
        return $this->realisateurs;
    }

    /**
     * Set saisons
     *
     * @param \AppBundle\Entity\Saison $saisons
     * @return Episode
     */
    public function setSaisons(\AppBundle\Entity\Saison $saisons = null)
    {
        $this->saisons = $saisons;

        return $this;
    }

    /**
     * Get saisons
     *
     * @return \AppBundle\Entity\Saison 
     */
    public function getSaisons()
    {
        return $this->saisons;
    }
}
