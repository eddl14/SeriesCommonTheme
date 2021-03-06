<?php
namespace AppBundle\Entity;

use AppBundle\Entity\Episode;
use AppBundle\Entity\Saison;
use AppBundle\Entity\Serie;
use AppBundle\Repository\SaisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Component\Validator\Constraints\DateTime;





/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="SaisonRepository")
 */
class Saison
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
     * @ORM\Column(name="nomSaison", type="string", length=255)
     */
    private $nomSaison;
    /**
     * @OneToMany(targetEntity="Episode", mappedBy="saisons")
     * 
     */
    private $episodes;
    
    /**
     * @ManyToOne(targetEntity="Serie", inversedBy="saisons")
     * 
     */
    private $series;
    /**
     * @var int
     *
     * @ORM\Column(name="numeroSaison", type="integer")
     */
    private $numeroSaison;

    /**
     * @var string
     *
     * @ORM\Column(name="resumeSaison", type="string", length=255)
     */
    private $resumeSaison;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="anneeProduction", type="datetime")
     */
    private $anneeProduction;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
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
     * Set nomSaison
     *
     * @param string $nomSaison
     * @return Saison
     */
    public function setNomSaison($nomSaison)
    {
        $this->nomSaison = $nomSaison;

        return $this;
    }

    /**
     * Get nomSaison
     *
     * @return string 
     */
    public function getNomSaison()
    {
        return $this->nomSaison;
    }

    /**
     * Set numeroSaison
     *
     * @param integer $numeroSaison
     * @return Saison
     */
    public function setNumeroSaison($numeroSaison)
    {
        $this->numeroSaison = $numeroSaison;

        return $this;
    }

    /**
     * Get numeroSaison
     *
     * @return integer 
     */
    public function getNumeroSaison()
    {
        return $this->numeroSaison;
    }

    /**
     * Set resumeSaison
     *
     * @param string $resumeSaison
     * @return Saison
     */
    public function setResumeSaison($resumeSaison)
    {
        $this->resumeSaison = $resumeSaison;

        return $this;
    }

    /**
     * Get resumeSaison
     *
     * @return string 
     */
    public function getResumeSaison()
    {
        return $this->resumeSaison;
    }

    /**
     * Set anneeProduction
     *
     * @param DateTime $anneeProduction
     * @return Saison
     */
    public function setAnneeProduction($anneeProduction)
    {
        $this->anneeProduction = $anneeProduction;

        return $this;
    }

    /**
     * Get anneeProduction
     *
     * @return DateTime 
     */
    public function getAnneeProduction()
    {
        return $this->anneeProduction;
    }

    /**
     * Set posterSaison
     *
     * @param string $posterSaison
     * @return Saison
     */
    public function setPosterSaison($posterSaison)
    {
        $this->posterSaison = $posterSaison;

        return $this;
    }

    /**
     * Get posterSaison
     *
     * @return string 
     */
    public function getPosterSaison()
    {
        return $this->posterSaison;
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
     * @return Saison
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
        $this->episodes = new ArrayCollection();
    }

    /**
     * Add episodes
     *
     * @param Episode $episodes
     * @return Saison
     */
    public function addEpisode(Episode $episodes)
    {
        $this->episodes[] = $episodes;

        return $this;
    }

    /**
     * Remove episodes
     *
     * @param Episode $episodes
     */
    public function removeEpisode(Episode $episodes)
    {
        $this->episodes->removeElement($episodes);
    }

    /**
     * Get episodes
     *
     * @return Collection 
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * Set series
     *
     * @param Serie $series
     * @return Saison
     */
    public function setSeries(Serie $series = null)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return Serie 
     */
    public function getSeries()
    {
        return $this->series;
    }
}
