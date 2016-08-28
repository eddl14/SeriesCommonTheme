<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Episode;
use AppBundle\Entity\Saison;
use AppBundle\Entity\Serie;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;



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
     * @ORM\Column(name="anneeProduction", type="datetimetz")
     */
    private $anneeProduction;

    /**
     * @var string
     *
     * @ORM\Column(name="posterSaison", type="string", length=255)
     */
    private $posterSaison;


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
}
