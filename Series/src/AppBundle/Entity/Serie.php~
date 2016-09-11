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
     * @OneToMany(targetEntity="CritiqueUtilisateur", mappedBy="series")
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acteursRoles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->saisons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->acteurs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notes_ser = new \Doctrine\Common\Collections\ArrayCollection();
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->producteurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set utilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurs
     * @return Serie
     */
    public function setUtilisateurs(\AppBundle\Entity\Utilisateur $utilisateurs = null)
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return \AppBundle\Entity\Utilisateur 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * Set critiques
     *
     * @param \AppBundle\Entity\CritiqueUtilisateur $critiques
     * @return Serie
     */
    public function setCritiques(\AppBundle\Entity\CritiqueUtilisateur $critiques = null)
    {
        $this->critiques = $critiques;

        return $this;
    }

    /**
     * Get critiques
     *
     * @return \AppBundle\Entity\CritiqueUtilisateur 
     */
    public function getCritiques()
    {
        return $this->critiques;
    }

    /**
     * Add acteursRoles
     *
     * @param \AppBundle\Entity\Role $acteursRoles
     * @return Serie
     */
    public function addActeursRole(\AppBundle\Entity\Role $acteursRoles)
    {
        $this->acteursRoles[] = $acteursRoles;

        return $this;
    }

    /**
     * Remove acteursRoles
     *
     * @param \AppBundle\Entity\Role $acteursRoles
     */
    public function removeActeursRole(\AppBundle\Entity\Role $acteursRoles)
    {
        $this->acteursRoles->removeElement($acteursRoles);
    }

    /**
     * Get acteursRoles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActeursRoles()
    {
        return $this->acteursRoles;
    }

    /**
     * Add saisons
     *
     * @param \AppBundle\Entity\Saison $saisons
     * @return Serie
     */
    public function addSaison(\AppBundle\Entity\Saison $saisons)
    {
        $this->saisons[] = $saisons;

        return $this;
    }

    /**
     * Remove saisons
     *
     * @param \AppBundle\Entity\Saison $saisons
     */
    public function removeSaison(\AppBundle\Entity\Saison $saisons)
    {
        $this->saisons->removeElement($saisons);
    }

    /**
     * Get saisons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSaisons()
    {
        return $this->saisons;
    }

    /**
     * Add acteurs
     *
     * @param \AppBundle\Entity\Acteur $acteurs
     * @return Serie
     */
    public function addActeur(\AppBundle\Entity\Acteur $acteurs)
    {
        $this->acteurs[] = $acteurs;

        return $this;
    }

    /**
     * Remove acteurs
     *
     * @param \AppBundle\Entity\Acteur $acteurs
     */
    public function removeActeur(\AppBundle\Entity\Acteur $acteurs)
    {
        $this->acteurs->removeElement($acteurs);
    }

    /**
     * Get acteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActeurs()
    {
        return $this->acteurs;
    }

    /**
     * Add notes_ser
     *
     * @param \AppBundle\Entity\Noter_ser $notesSer
     * @return Serie
     */
    public function addNotesSer(\AppBundle\Entity\Noter_ser $notesSer)
    {
        $this->notes_ser[] = $notesSer;

        return $this;
    }

    /**
     * Remove notes_ser
     *
     * @param \AppBundle\Entity\Noter_ser $notesSer
     */
    public function removeNotesSer(\AppBundle\Entity\Noter_ser $notesSer)
    {
        $this->notes_ser->removeElement($notesSer);
    }

    /**
     * Get notes_ser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotesSer()
    {
        return $this->notes_ser;
    }

    /**
     * Add genres
     *
     * @param \AppBundle\Entity\Genre $genres
     * @return Serie
     */
    public function addGenre(\AppBundle\Entity\Genre $genres)
    {
        $this->genres[] = $genres;

        return $this;
    }

    /**
     * Remove genres
     *
     * @param \AppBundle\Entity\Genre $genres
     */
    public function removeGenre(\AppBundle\Entity\Genre $genres)
    {
        $this->genres->removeElement($genres);
    }

    /**
     * Get genres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Add producteurs
     *
     * @param \AppBundle\Entity\Producteur $producteurs
     * @return Serie
     */
    public function addProducteur(\AppBundle\Entity\Producteur $producteurs)
    {
        $this->producteurs[] = $producteurs;

        return $this;
    }

    /**
     * Remove producteurs
     *
     * @param \AppBundle\Entity\Producteur $producteurs
     */
    public function removeProducteur(\AppBundle\Entity\Producteur $producteurs)
    {
        $this->producteurs->removeElement($producteurs);
    }

    /**
     * Get producteurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducteurs()
    {
        return $this->producteurs;
    }

    /**
     * Add critiques
     *
     * @param \AppBundle\Entity\CritiqueUtilisateur $critiques
     * @return Serie
     */
    public function addCritique(\AppBundle\Entity\CritiqueUtilisateur $critiques)
    {
        $this->critiques[] = $critiques;

        return $this;
    }

    /**
     * Remove critiques
     *
     * @param \AppBundle\Entity\CritiqueUtilisateur $critiques
     */
    public function removeCritique(\AppBundle\Entity\CritiqueUtilisateur $critiques)
    {
        $this->critiques->removeElement($critiques);
    }
}
