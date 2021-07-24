<?php

namespace App\Entity;

use App\Repository\ResultatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResultatRepository::class)
 */
class Resultat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $technique;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat;

    /**
     * @ORM\Column(type="integer")
     */
    private $ct;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat_anterieur;

    /**
     * @ORM\OneToOne(targetEntity=Analyse::class, cascade={"persist", "remove"})
     */
    private $analyse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTechnique(): ?string
    {
        return $this->technique;
    }

    public function setTechnique(string $technique): self
    {
        $this->technique = $technique;

        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getCt(): ?int
    {
        return $this->ct;
    }

    public function setCt(int $ct): self
    {
        $this->ct = $ct;

        return $this;
    }

    public function getResultatAnterieur(): ?string
    {
        return $this->resultat_anterieur;
    }

    public function setResultatAnterieur(string $resultat_anterieur): self
    {
        $this->resultat_anterieur = $resultat_anterieur;

        return $this;
    }

    public function getAnalyse(): ?Analyse
    {
        return $this->analyse;
    }

    public function setAnalyse(?Analyse $analyse): self
    {
        $this->analyse = $analyse;

        return $this;
    }
}
