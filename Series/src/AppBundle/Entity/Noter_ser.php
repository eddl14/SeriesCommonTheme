<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Noter_ser;
use AppBundle\Entity\Serie;
use AppBundle\Entity\Utilisateur;
use AppBundle\Repository\Noter_serRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;



/**
 * Noter_ser
 *
 * @ORM\Table(name="noter_ser")
 * @ORM\Entity(repositoryClass="Noter_serRepository")
 */
class Noter_ser
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
     * @ManyToOne(targetEntity="Serie", inversedBy="notes_ser")
     * 
     */
    private $seriesNotes;
    /**
     * @ManyToOne(targetEntity="Utilisateur", inversedBy="notes_ser")
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
     * @return Noter_ser
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
     * Set seriesNotes
     *
     * @param \AppBundle\Entity\Serie $seriesNotes
     * @return Noter_ser
     */
    public function setSeriesNotes(\AppBundle\Entity\Serie $seriesNotes = null)
    {
        $this->seriesNotes = $seriesNotes;

        return $this;
    }

    /**
     * Get seriesNotes
     *
     * @return \AppBundle\Entity\Serie 
     */
    public function getSeriesNotes()
    {
        return $this->seriesNotes;
    }

    /**
     * Set utilisateurs
     *
     * @param \AppBundle\Entity\Utilisateur $utilisateurs
     * @return Noter_ser
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
