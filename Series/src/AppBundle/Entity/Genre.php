<?php

namespace AppBundle\Entity;


use AppBundle\Entity\Genre;
use AppBundle\Entity\Serie;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;





/**
 * Genre
 *
 * @ORM\Table(name="genre")
 * @ORM\Entity(repositoryClass="GenreRepository")
 */
class Genre
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
     * @ManyToMany(targetEntity="Serie", mappedBy="genres")
     * 
     */
    private $series;
    /**
     * @var string
     *
     * @ORM\Column(name="libelleGenre", type="string", length=255)
     */
    private $libelleGenre;

    /**
     * @var string
     *
     * @ORM\Column(name="ageConseille", type="string", length=255)
     */
    private $ageConseille;
    

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
     * Set libelleGenre
     *
     * @param string $libelleGenre
     * @return Genre
     */
    public function setLibelleGenre($libelleGenre)
    {
        $this->libelleGenre = $libelleGenre;

        return $this;
    }

    /**
     * Get libelleGenre
     *
     * @return string 
     */
    public function getLibelleGenre()
    {
        return $this->libelleGenre;
    }

    /**
     * Set ageConseille
     *
     * @param string $ageConseille
     * @return Genre
     */
    public function setAgeConseille($ageConseille)
    {
        $this->ageConseille = $ageConseille;

        return $this;
    }

    /**
     * Get ageConseille
     *
     * @return string 
     */
    public function getAgeConseille()
    {
        return $this->ageConseille;
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
     * @return Genre
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
        $this->series = new ArrayCollection();
    }

    /**
     * Add series
     *
     * @param Serie $series
     * @return Genre
     */
    public function addSeries(Serie $series)
    {
        $this->series[] = $series;

        return $this;
    }

    /**
     * Remove series
     *
     * @param Serie $series
     */
    public function removeSeries(Serie $series)
    {
        $this->series->removeElement($series);
    }

    /**
     * Get series
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSeries()
    {
        return $this->series;
    }
}
