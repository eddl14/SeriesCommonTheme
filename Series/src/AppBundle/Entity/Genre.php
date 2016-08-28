<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Genre;
use AppBundle\Entity\Serie;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping as ORM;



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
}
