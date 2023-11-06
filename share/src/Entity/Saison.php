<?php

namespace App\Entity;

use App\Repository\SaisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaisonRepository::class)]
class Saison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelleSaison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleSaison(): ?string
    {
        return $this->libelleSaison;
    }

    public function setLibelleSaison(string $libelleSaison): static
    {
        $this->libelleSaison = $libelleSaison;

        return $this;
    }
}
