<?php

namespace App\Entity;

use App\Repository\SemaineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SemaineRepository::class)]
class Semaine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $année = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $numSemaine = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnée(): ?\DateTimeInterface
    {
        return $this->année;
    }

    public function setAnnée(\DateTimeInterface $année): static
    {
        $this->année = $année;

        return $this;
    }

    public function getNumSemaine(): ?\DateTimeInterface
    {
        return $this->numSemaine;
    }

    public function setNumSemaine(\DateTimeInterface $numSemaine): static
    {
        $this->numSemaine = $numSemaine;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }
}
