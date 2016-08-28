<?php

namespace AppBundle\Entity;

use AppBundle\Repository\CritiqueUtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * CritiqueUtilisateur
 *
 * @ORM\Table(name="critique")
 * @ORM\Entity(repositoryClass="CritiqueUtilisateurRepository")
 */
class CritiqueUtilisateur
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
     * @ManyToOne(targetEntity="Serie", inversedBy="critiques")
     * 
     */
    private $series;
    /**
     * @OneToMany(targetEntity="Noter_crit", mappedBy="notesCritiques")
     * 
     */
    private $critiquesNotes;
    /**
     * @ManyToOne(targetEntity="Utilisateur", inversedBy="critiques")
     * 
     */
    private $utilisateurs;
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelleCritique", type="string", length=255)
     */
    private $libelleCritique;


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
     * Set libelleCritique
     *
     * @param string $libelleCritique
     * @return CritiqueUtilisateur
     */
    public function setLibelleCritique($libelleCritique)
    {
        $this->libelleCritique = $libelleCritique;

        return $this;
    }

    /**
     * Get libelleCritique
     *
     * @return string 
     */
    public function getLibelleCritique()
    {
        return $this->libelleCritique;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->critiquesNotes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set series
     *
     * @param \AppBundle\Entity\Serie $series
     * @return CritiqueUtilisateur
     */
    public function setSeries(\AppBundle\Entity\Serie $series = null)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return \AppBundle\Entity\Serie 
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Add critiquesNotes
     *
     * @param \AppBundle\Entity\Noter_crit $critiquesNotes
     * @return CritiqueUtilisateur
     */
    public function addCritiquesNote(\AppBundle\Entity\Noter_crit $critiquesNotes)
    {
        $this->critiquesNotes[] = $critiquesNotes;

        return $this;
    }

    /**
     * Remove critiquesNotes
     *
     * @param \AppBundle\Entity\Noter_crit $critiquesNotes
     */
    public function removeCritiquesNote(\AppBundle\Entity\Noter_crit $critiquesNotes)
    {
        $this->critiquesNotes->removeElement($critiquesNotes);
    }

    /**
     * Get critiquesNotes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCritiquesNotes()
    {
        return $this->critiquesNotes;
    }

    /**
     * Set utilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurs
     * @return CritiqueUtilisateur
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
}
