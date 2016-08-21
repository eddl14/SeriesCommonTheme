<?php

use AppBundle\Entity\CritiqueUtilisateur;
use AppBundle\Entity\Utilisateur;
use AppBundle\Repository\CritiqueUtilisateurRepository;
use Doctrine\ORM\Mapping\ManyToMany;

namespace AppBundle\Entity;


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
     * @ManyToMany(targetEntity="Utilisateur", mappedBy="critiques")
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
