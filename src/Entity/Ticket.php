<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TicketRepository::class)]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $annee = null;

    #[ORM\Column]
    private ?int $numero_ticket = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_vente = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnee(): ?int
    {
        return $this->annee;
    }

    public function setAnee(int $annee): static
    {
        $this->annee = $annee;

        return $this;
    }

    public function getNumeroTicket(): ?int
    {
        return $this->numero_ticket;
    }

    public function setNumeroTicket(int $numero_ticket): static
    {
        $this->numero_ticket = $numero_ticket;

        return $this;
    }

    public function getDateVente(): ?\DateTimeImmutable
    {
        return $this->date_vente;
    }

    public function setDateVente(\DateTimeImmutable $date_vente): static
    {
        $this->date_vente = $date_vente;

        return $this;
    }
}
