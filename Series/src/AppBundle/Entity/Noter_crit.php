<?php

namespace AppBundle\Entity;

use AppBundle\Repository\Noter_critRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * Noter_crit
 *
 * @ORM\Table(name="noter_crit")
 * @ORM\Entity(repositoryClass="Noter_critRepository")
 */
class Noter_crit
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
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;
    
    /**
     * @ManyToOne(targetEntity="Utilisateur", inversedBy="notesCritiques")
     * 
     */
    private $critiquesUtilisateurs;
    
    /**
     * @ManyToOne(targetEntity="CritiqueUtilisateur", inversedBy="critiquesNotes")
     * 
     */
    private $notesCritiques;
    /**
     * @ManyToOne(targetEntity="Utilisateur", inversedBy="note_critique")
     * 
     */
    private $utilisateurs;
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
     * Set note
     *
     * @param string $note
     * @return Noter_crit
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set critiquesUtilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $critiquesUtilisateurs
     * @return Noter_crit
     */
    public function setCritiquesUtilisateurs(\AppBundle\Entity\Utilisateur $critiquesUtilisateurs = null)
    {
        $this->critiquesUtilisateurs = $critiquesUtilisateurs;

        return $this;
    }

    /**
     * Get critiquesUtilisateurs
     *
     * @return \AppBundle\Entity\Utilisateur 
     */
    public function getCritiquesUtilisateurs()
    {
        return $this->critiquesUtilisateurs;
    }

    /**
     * Set notesCritiques
     *
     * @param \AppBundle\Entity\CritiqueUtilisateur $notesCritiques
     * @return Noter_crit
     */
    public function setNotesCritiques(\AppBundle\Entity\CritiqueUtilisateur $notesCritiques = null)
    {
        $this->notesCritiques = $notesCritiques;

        return $this;
    }

    /**
     * Get notesCritiques
     *
     * @return \AppBundle\Entity\CritiqueUtilisateur 
     */
    public function getNotesCritiques()
    {
        return $this->notesCritiques;
    }

    /**
     * Set utilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurs
     * @return Noter_crit
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
