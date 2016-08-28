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
}
