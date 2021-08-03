<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnalyseRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=AnalyseRepository::class)
 */
#[ApiResource(
    normalizationContext:['groups' => ['read:analyse']],
    itemOperations:[
        'get',
        'put',
        'delete' =>[
            'normalization_context' =>['groups'=> ['read:analyse']],
        ],

    ],
)]

class Analyse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    #[Groups(['read:analyse'])]
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    #[Groups(['read:analyse'])]
    private $numero_quitance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $origine_prelevement;

    /**
     * @ORM\Column(type="date")
     */
    #[Groups(['read:analyse'])]
    private $date_prelevement;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_prelevement;

    /**
     * @ORM\Column(type="date")
     */
    private $date_reception;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_reception;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numero_enregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $analyse_demandee;

    /**
     * @ORM\Column(type="text")
     */
    #[Groups(['read:analyse'])]
    private $type_prelevement;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class, inversedBy="analyses")
     */
    private $patient;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroQuitance(): ?int
    {
        return $this->numero_quitance;
    }

    public function setNumeroQuitance(int $numero_quitance): self
    {
        $this->numero_quitance = $numero_quitance;

        return $this;
    }

    public function getOriginePrelevement(): ?string
    {
        return $this->origine_prelevement;
    }

    public function setOriginePrelevement(string $origine_prelevement): self
    {
        $this->origine_prelevement = $origine_prelevement;

        return $this;
    }

    public function getDatePrelevement(): ?\DateTimeInterface
    {
        return $this->date_prelevement;
    }

    public function setDatePrelevement(\DateTimeInterface $date_prelevement): self
    {
        $this->date_prelevement = $date_prelevement;

        return $this;
    }

    public function getHeurePrelevement(): ?\DateTimeInterface
    {
        return $this->heure_prelevement;
    }

    public function setHeurePrelevement(\DateTimeInterface $heure_prelevement): self
    {
        $this->heure_prelevement = $heure_prelevement;

        return $this;
    }

    public function getDateReception(): ?\DateTimeInterface
    {
        return $this->date_reception;
    }

    public function setDateReception(\DateTimeInterface $date_reception): self
    {
        $this->date_reception = $date_reception;

        return $this;
    }

    public function getHeureReception(): ?\DateTimeInterface
    {
        return $this->heure_reception;
    }

    public function setHeureReception(\DateTimeInterface $heure_reception): self
    {
        $this->heure_reception = $heure_reception;

        return $this;
    }

    public function getNumeroEnregistrement(): ?string
    {
        return $this->numero_enregistrement;
    }

    public function setNumeroEnregistrement(string $numero_enregistrement): self
    {
        $this->numero_enregistrement = $numero_enregistrement;

        return $this;
    }

    public function getAnalyseDemandee(): ?string
    {
        return $this->analyse_demandee;
    }

    public function setAnalyseDemandee(string $analyse_demandee): self
    {
        $this->analyse_demandee = $analyse_demandee;

        return $this;
    }

    public function getTypePrelevement(): ?string
    {
        return $this->type_prelevement;
    }

    public function setTypePrelevement(string $type_prelevement): self
    {
        $this->type_prelevement = $type_prelevement;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

}
