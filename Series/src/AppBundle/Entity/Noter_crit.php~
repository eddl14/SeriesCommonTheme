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
}
