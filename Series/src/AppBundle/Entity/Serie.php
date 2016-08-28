<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="SerieRepository")
 */
class Serie
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
     * @ManyToOne(targetEntity="Utilisateur", inversedBy="series")
     * 
     */
    private $utilisateurs;
    /**
     * @OneToOne(targetEntity="CritiqueUtilisateur", inversedBy="series")
     * 
     */
    private $critiques;
    /**
     * @OneToMany(targetEntity="Role", mappedBy="seriesRoles")
     * 
     */
    private $acteursRoles;
    /**
     * @OneToMany(targetEntity="Saison", mappedBy="series")
     * 
     */
    private $saisons;
    /**
     * @ManyToMany(targetEntity="Acteur", inversedBy="series")
     * 
     */
    private $acteurs;
    /**
     * @OneToMany(targetEntity="Noter_ser", mappedBy="seriesNotes")
     * 
     */
    private $notes_ser;
    /**
     * @ManyToMany(targetEntity="Genre", inversedBy="series")
     * 
     */
    private $genres;
    
    /**
     * @ManyToMany(targetEntity="Producteur", mappedBy="series")
     * 
     */
    private $producteurs;
    /**
     * @var string
     *
     * @ORM\Column(name="nomSerie", type="string", length=255)
     */
    private $nomSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomOriginalSerie", type="string", length=255)
     */
    private $nomOriginalSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsisSerie", type="string", length=255)
     */
    private $synopsisSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="resumeSerie", type="string", length=255)
     */
    private $resumeSerie;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="anneeProdSerie", type="datetime")
     */
    private $anneeProdSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="posterSerie", type="string", length=255)
     */
    private $posterSerie;


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
     * Set nomSerie
     *
     * @param string $nomSerie
     * @return Series
     */
    public function setNomSerie($nomSerie)
    {
        $this->nomSerie = $nomSerie;

        return $this;
    }

    /**
     * Get nomSerie
     *
     * @return string 
     */
    public function getNomSerie()
    {
        return $this->nomSerie;
    }

    /**
     * Set nomOriginalSerie
     *
     * @param string $nomOriginalSerie
     * @return Series
     */
    public function setNomOriginalSerie($nomOriginalSerie)
    {
        $this->nomOriginalSerie = $nomOriginalSerie;

        return $this;
    }

    /**
     * Get nomOriginalSerie
     *
     * @return string 
     */
    public function getNomOriginalSerie()
    {
        return $this->nomOriginalSerie;
    }

    /**
     * Set synopsisSerie
     *
     * @param string $synopsisSerie
     * @return Series
     */
    public function setSynopsisSerie($synopsisSerie)
    {
        $this->synopsisSerie = $synopsisSerie;

        return $this;
    }

    /**
     * Get synopsisSerie
     *
     * @return string 
     */
    public function getSynopsisSerie()
    {
        return $this->synopsisSerie;
    }

    /**
     * Set resumeSerie
     *
     * @param string $resumeSerie
     * @return Series
     */
    public function setResumeSerie($resumeSerie)
    {
        $this->resumeSerie = $resumeSerie;

        return $this;
    }

    /**
     * Get resumeSerie
     *
     * @return string 
     */
    public function getResumeSerie()
    {
        return $this->resumeSerie;
    }

    /**
     * Set anneeProdSerie
     *
     * @param DateTime $anneeProdSerie
     * @return Series
     */
    public function setAnneeProdSerie($anneeProdSerie)
    {
        $this->anneeProdSerie = $anneeProdSerie;

        return $this;
    }

    /**
     * Get anneeProdSerie
     *
     * @return DateTime 
     */
    public function getAnneeProdSerie()
    {
        return $this->anneeProdSerie;
    }

    /**
     * Set posterSerie
     *
     * @param string $posterSerie
     * @return Series
     */
    public function setPosterSerie($posterSerie)
    {
        $this->posterSerie = $posterSerie;

        return $this;
    }

    /**
     * Get posterSerie
     *
     * @return string 
     */
    public function getPosterSerie()
    {
        return $this->posterSerie;
    }
}
