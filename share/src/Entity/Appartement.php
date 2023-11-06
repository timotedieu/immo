<?php

namespace App\Entity;

use App\Repository\AppartementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppartementRepository::class)]
class Appartement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $supercficie = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptif = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSupercficie(): ?string
    {
        return $this->supercficie;
    }

    public function setSupercficie(string $supercficie): static
    {
        $this->supercficie = $supercficie;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): static
    {
        $this->descriptif = $descriptif;

        return $this;
    }
}
