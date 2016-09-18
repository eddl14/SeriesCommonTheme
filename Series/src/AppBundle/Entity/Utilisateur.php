<?php

namespace AppBundle\Entity;

use AppBundle\Repository\UtilisateurRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="UtilisateurRepository")
 */
class Utilisateur Implements UserInterface
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
     * @OneToMany(targetEntity="Message", mappedBy="utilisateurs")
     * 
     */
    private $messages;
    /**
     * @OneToMany(targetEntity="Serie", mappedBy="utilisateurs")
     * 
     */
    private $series;
    
    /**
     * @ManyToMany(targetEntity="Episode", inversedBy="utilisateurs")
     * 
     */
    private $episodes;
    /**
     * @OneToMany(targetEntity="CritiqueUtilisateur", mappedBy="utilisateurs")
     * 
     */
    private $critiques;
    /**
     * @OneToMany(targetEntity="Noter_crit", mappedBy="critiquesUtilisateurs")
     * 
     */
    private $notesCritiques;
    /**
     * @OneToMany(targetEntity="Noter_crit", mappedBy="utilisateurs")
     * 
     */
    private $note_critique;
    /**
     * @OneToMany(targetEntity="Noter_ser", mappedBy="utilisateurs")
     * 
     */
    private $notes_ser;
    /**
     * @var string
     *
     * @ORM\Column(name="nomUtilisateur", type="string", length=255)
     */
    private $nomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomUtilisateur", type="string", length=255)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudoUtilisateur", type="string", length=255, unique=true)
     */
    private $pseudoUtilisateur;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    private $plainMdpUtilisateur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="mdpUtilisateur", type="string", length=64)
     */
    private $mdpUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mailUtilisateur", type="string", length=255, unique=true)
     */
    private $mailUtilisateur;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

    /**
     * @var string

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
     * Set nomUtilisateur
     *
     * @param string $nomUtilisateur
     * @return Utilisateur
     */
    public function setNomUtilisateur($nomUtilisateur)
    {
        $this->nomUtilisateur = $nomUtilisateur;

        return $this;
    }

    /**
     * Get nomUtilisateur
     *
     * @return string 
     */
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    /**
     * Set prenomUtilisateur
     *
     * @param string $prenomUtilisateur
     * @return Utilisateur
     */
    public function setPrenomUtilisateur($prenomUtilisateur)
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    /**
     * Get prenomUtilisateur
     *
     * @return string 
     */
    public function getPrenomUtilisateur()
    {
        return $this->prenomUtilisateur;
    }

    /**
     * Set pseudoUtilisateur
     *
     * @param string $pseudoUtilisateur
     * @return Utilisateur
     */
    public function setPseudoUtilisateur($pseudoUtilisateur)
    {
        $this->pseudoUtilisateur = $pseudoUtilisateur;

        return $this;
    }

    /**
     * Get pseudoUtilisateur
     *
     * @return string 
     */
    public function getPseudoUtilisateur()
    {
        return $this->pseudoUtilisateur;
    }

    /**
     * Set mdpUtilisateur
     *
     * @param string $mdpUtilisateur
     * @return Utilisateur
     */
    public function setMdpUtilisateur($mdpUtilisateur)
    {
        $this->mdpUtilisateur = $mdpUtilisateur;

        return $this;
    }

    /**
     * Get mdpUtilisateur
     *
     * @return string 
     */
    public function getMdpUtilisateur()
    {
        return $this->mdpUtilisateur;
    }

    /**
     * Set mailUtilisateur
     *
     * @param string $mailUtilisateur
     * @return Utilisateur
     */
    public function setMailUtilisateur($mailUtilisateur)
    {
        $this->mailUtilisateur = $mailUtilisateur;

        return $this;
    }

    /**
     * Get mailUtilisateur
     *
     * @return string 
     */
    public function getMailUtilisateur()
    {
        return $this->mailUtilisateur;
    }

    /**
     * Set dateNaissance
     *
     * @param DateTime $dateNaissance
     * @return Utilisateur
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set photoProfil
     *
     * @param string $photoProfil
     * @return Utilisateur
     */
    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;

        return $this;
    }

    /**
     * Get photoProfil
     *
     * @return string 
     */
    public function getPhotoProfil()
    {
        return $this->photoProfil;
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
     * @return Utilisateur
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
    
    public function getPlainMdpUtilisateur()
    {
        return $this->plainMdpUtilisateur;
    }

    public function setPlainMdpUtilisateur($mdpUtilisateur)
    {
        $this->plainMdpUtilisateur = $mdpUtilisateur;
    }
    
    public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->messages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->series = new \Doctrine\Common\Collections\ArrayCollection();
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->critiques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notesCritiques = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notes_ser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add messages
     *
     * @param \AppBundle\Entity\Message $messages
     * @return Utilisateur
     */
    public function addMessage(\AppBundle\Entity\Message $messages)
    {
        $this->messages[] = $messages;

        return $this;
    }

    /**
     * Remove messages
     *
     * @param \AppBundle\Entity\Message $messages
     */
    public function removeMessage(\AppBundle\Entity\Message $messages)
    {
        $this->messages->removeElement($messages);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Add series
     *
     * @param \AppBundle\Entity\Serie $series
     * @return Utilisateur
     */
    public function addSeries(\AppBundle\Entity\Serie $series)
    {
        $this->series[] = $series;

        return $this;
    }

    /**
     * Remove series
     *
     * @param \AppBundle\Entity\Serie $series
     */
    public function removeSeries(\AppBundle\Entity\Serie $series)
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

    /**
     * Add episodes
     *
     * @param \AppBundle\Entity\Episode $episodes
     * @return Utilisateur
     */
    public function addEpisode(\AppBundle\Entity\Episode $episodes)
    {
        $this->episodes[] = $episodes;

        return $this;
    }

    /**
     * Remove episodes
     *
     * @param \AppBundle\Entity\Episode $episodes
     */
    public function removeEpisode(\AppBundle\Entity\Episode $episodes)
    {
        $this->episodes->removeElement($episodes);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * Add critiques
     *
     * @param \AppBundle\Entity\CritiqueUtilisateur $critiques
     * @return Utilisateur
     */
    public function addCritique(\AppBundle\Entity\CritiqueUtilisateur $critiques)
    {
        $this->critiques[] = $critiques;

        return $this;
    }

    /**
     * Remove critiques
     *
     * @param \AppBundle\Entity\CritiqueUtilisateur $critiques
     */
    public function removeCritique(\AppBundle\Entity\CritiqueUtilisateur $critiques)
    {
        $this->critiques->removeElement($critiques);
    }

    /**
     * Get critiques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCritiques()
    {
        return $this->critiques;
    }

    /**
     * Add notesCritiques
     *
     * @param \AppBundle\Entity\Noter_crit $notesCritiques
     * @return Utilisateur
     */
    public function addNotesCritique(\AppBundle\Entity\Noter_crit $notesCritiques)
    {
        $this->notesCritiques[] = $notesCritiques;

        return $this;
    }

    /**
     * Remove notesCritiques
     *
     * @param \AppBundle\Entity\Noter_crit $notesCritiques
     */
    public function removeNotesCritique(\AppBundle\Entity\Noter_crit $notesCritiques)
    {
        $this->notesCritiques->removeElement($notesCritiques);
    }

    /**
     * Get notesCritiques
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotesCritiques()
    {
        return $this->notesCritiques;
    }

    /**
     * Add notes_ser
     *
     * @param \AppBundle\Entity\Noter_ser $notesSer
     * @return Utilisateur
     */
    public function addNotesSer(\AppBundle\Entity\Noter_ser $notesSer)
    {
        $this->notes_ser[] = $notesSer;

        return $this;
    }

    /**
     * Remove notes_ser
     *
     * @param \AppBundle\Entity\Noter_ser $notesSer
     */
    public function removeNotesSer(\AppBundle\Entity\Noter_ser $notesSer)
    {
        $this->notes_ser->removeElement($notesSer);
    }

    /**
     * Get notes_ser
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotesSer()
    {
        return $this->notes_ser;
    }

    /**
     * Add note_critique
     *
     * @param \AppBundle\Entity\Noter_crit $noteCritique
     * @return Utilisateur
     */
    public function addNoteCritique(\AppBundle\Entity\Noter_crit $noteCritique)
    {
        $this->note_critique[] = $noteCritique;

        return $this;
    }

    /**
     * Remove note_critique
     *
     * @param \AppBundle\Entity\Noter_crit $noteCritique
     */
    public function removeNoteCritique(\AppBundle\Entity\Noter_crit $noteCritique)
    {
        $this->note_critique->removeElement($noteCritique);
    }

    /**
     * Get note_critique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoteCritique()
    {
        return $this->note_critique;
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        
    }

    public function getRoles() {
        
    }

    public function getUsername() {
        
    }

}
