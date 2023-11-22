<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatureRepository::class)]
class Candidature
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $nom = null;

    #[ORM\Column(length: 180)]
    private ?string $prenom = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    #[ORM\ManyToOne(inversedBy: 'candidatures')]
    #[ORM\JoinColumn(nullable: false)]
    private ?OffreDeStage $idOffre_de_stage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getIdOffreDeStage(): ?OffreDeStage
    {
        return $this->idOffre_de_stage;
    }

    public function setIdOffreDeStage(?OffreDeStage $idOffre_de_stage): static
    {
        $this->idOffre_de_stage = $idOffre_de_stage;

        return $this;
    }
}
