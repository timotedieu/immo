<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column(length: 255)]
    private ?string $nomclient = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomclient = null;

    #[ORM\Column(length: 255)]
    private ?string $rueClient = null;

    #[ORM\Column(length: 255)]
    private ?string $cpClient = null;

    #[ORM\Column(length: 255)]
    private ?string $villeClient = null;

    #[ORM\Column(length: 255)]
    private ?string $telCLient = null;

    #[ORM\Column(length: 255)]
    private ?string $numChequeAcompte = null;

    #[ORM\Column(length: 255)]
    private ?string $etatResrvation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(string $nomclient): static
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrenomclient(): ?string
    {
        return $this->prenomclient;
    }

    public function setPrenomclient(string $prenomclient): static
    {
        $this->prenomclient = $prenomclient;

        return $this;
    }

    public function getRueClient(): ?string
    {
        return $this->rueClient;
    }

    public function setRueClient(string $rueClient): static
    {
        $this->rueClient = $rueClient;

        return $this;
    }

    public function getCpClient(): ?string
    {
        return $this->cpClient;
    }

    public function setCpClient(string $cpClient): static
    {
        $this->cpClient = $cpClient;

        return $this;
    }

    public function getVilleClient(): ?string
    {
        return $this->villeClient;
    }

    public function setVilleClient(string $villeClient): static
    {
        $this->villeClient = $villeClient;

        return $this;
    }

    public function getTelCLient(): ?string
    {
        return $this->telCLient;
    }

    public function setTelCLient(string $telCLient): static
    {
        $this->telCLient = $telCLient;

        return $this;
    }

    public function getNumChequeAcompte(): ?string
    {
        return $this->numChequeAcompte;
    }

    public function setNumChequeAcompte(string $numChequeAcompte): static
    {
        $this->numChequeAcompte = $numChequeAcompte;

        return $this;
    }

    public function getEtatResrvation(): ?string
    {
        return $this->etatResrvation;
    }

    public function setEtatResrvation(string $etatResrvation): static
    {
        $this->etatResrvation = $etatResrvation;

        return $this;
    }
}
