<?php

namespace App\Entity;

use App\Repository\ImmeubleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImmeubleRepository::class)]
class Immeuble
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomImeuble = null;

    #[ORM\Column(length: 255)]
    private ?string $rueImmeuble = null;

    #[ORM\Column(length: 255)]
    private ?string $cpImeuble = null;

    #[ORM\Column(length: 255)]
    private ?string $villeImmeuble = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomImeuble(): ?string
    {
        return $this->nomImeuble;
    }

    public function setNomImeuble(string $nomImeuble): static
    {
        $this->nomImeuble = $nomImeuble;

        return $this;
    }

    public function getRueImmeuble(): ?string
    {
        return $this->rueImmeuble;
    }

    public function setRueImmeuble(string $rueImmeuble): static
    {
        $this->rueImmeuble = $rueImmeuble;

        return $this;
    }

    public function getCpImeuble(): ?string
    {
        return $this->cpImeuble;
    }

    public function setCpImeuble(string $cpImeuble): static
    {
        $this->cpImeuble = $cpImeuble;

        return $this;
    }

    public function getVilleImmeuble(): ?string
    {
        return $this->villeImmeuble;
    }

    public function setVilleImmeuble(string $villeImmeuble): static
    {
        $this->villeImmeuble = $villeImmeuble;

        return $this;
    }
}
