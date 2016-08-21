<?php

namespace AppBundle\Entity;

use AppBundle\Repository\UtilisateurRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;


class Utilisateur
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
     * @ManyToMany(targetEntity="Serie", mappedBy="utilisateurs")
     * 
     */
    private $series;
    
    /**
     * @ManyToMany(targetEntity="CritiqueUtilisateur", inversedBy="utilisateurs")
     * 
     */
    private $critiques;
    
    /**
     * @ManyToMany(targetEntity="Episode", inversedBy="utilisateurs")
     * 
     */
    private $episodes;
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
     * @ORM\Column(name="pseudoUtilisateur", type="string", length=255)
     */
    private $pseudoUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpUtilisateur", type="string", length=255)
     */
    private $mdpUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mailUtilisateur", type="string", length=255)
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
     *
     * @ORM\Column(name="photoProfil", type="string", length=255)
     */
    private $photoProfil;


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
}
