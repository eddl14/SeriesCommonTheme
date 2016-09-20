<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ManyToMany(targetEntity="Role", inversedBy="acteurs")
     * 
     */
    private $roles;
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
    * @var string
    * 
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
     * @return Acteur
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
        $this->roles = new ArrayCollection();
        $this->series = new ArrayCollection();
    }

    /**
     * Add roles
     *
     * @param Role $roles
     * @return Acteur
     */
    public function addRole(Role $roles)
    {
        $this->roles[] = $roles;

        return $this;
    }

    /**
     * Remove roles
     *
     * @param Role $roles
     */
    public function removeRole(Role $roles)
    {
        $this->roles->removeElement($roles);
    }

    /**
     * Get roles
     *
     * @return Collection 
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Add series
     *
     * @param Serie $series
     * @return Acteur
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
     * @return Collection 
     */
    public function getSeries()
    {
        return $this->series;
    }
}
