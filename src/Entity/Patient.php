<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PatientRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 * @ApiResource()
 */

class Patient
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe;

    /**
     * @ORM\Column(type="integer")
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_quartier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_cas;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_visite;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="patient")
     */
    private $utilisateur_patient;

    /**
     * @ORM\OneToMany(targetEntity=Analyse::class, mappedBy="patient")
     */
    private $analyses;

    public function __construct()
    {
        $this->analyses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getVilleQuartier(): ?string
    {
        return $this->ville_quartier;
    }

    public function setVilleQuartier(string $ville_quartier): self
    {
        $this->ville_quartier = $ville_quartier;

        return $this;
    }

    public function getTypeCas(): ?string
    {
        return $this->type_cas;
    }

    public function setTypeCas(string $type_cas): self
    {
        $this->type_cas = $type_cas;

        return $this;
    }

    public function getNombreVisite(): ?int
    {
        return $this->nombre_visite;
    }

    public function setNombreVisite(int $nombre_visite): self
    {
        $this->nombre_visite = $nombre_visite;

        return $this;
    }

    public function getUtilisateurPatient(): ?Utilisateur
    {
        return $this->utilisateur_patient;
    }

    public function setUtilisateurPatient(?Utilisateur $utilisateur_patient): self
    {
        $this->utilisateur_patient = $utilisateur_patient;

        return $this;
    }

    /**
     * @return Collection|Analyse[]
     */
    public function getAnalyses(): Collection
    {
        return $this->analyses;
    }

    public function addAnalysis(Analyse $analysis): self
    {
        if (!$this->analyses->contains($analysis)) {
            $this->analyses[] = $analysis;
            $analysis->setPatient($this);
        }

        return $this;
    }

    public function removeAnalysis(Analyse $analysis): self
    {
        if ($this->analyses->removeElement($analysis)) {
            // set the owning side to null (unless already changed)
            if ($analysis->getPatient() === $this) {
                $analysis->setPatient(null);
            }
        }

        return $this;
    }
}
