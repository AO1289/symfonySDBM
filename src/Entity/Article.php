<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(nullable: true)]
    private ?float $prix_achat = null;

    #[ORM\Column(nullable: true)]
    private ?int $volume = null;

    #[ORM\Column(nullable: true)]
    private ?float $titrage = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Marque $marque = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Couleur $couleur = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    private ?Typebiere $type = null;

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

    public function getPrixAchat(): ?float
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(?float $prix_achat): static
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function setVolume(?int $volume): static
    {
        $this->volume = $volume;

        return $this;
    }

    public function getTitrage(): ?float
    {
        return $this->titrage;
    }

    public function setTitrage(?float $titrage): static
    {
        $this->titrage = $titrage;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getCouleur(): ?Couleur
    {
        return $this->couleur;
    }

    public function setCouleur(?Couleur $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getType(): ?Typebiere
    {
        return $this->type;
    }

    public function setType(?Typebiere $type): static
    {
        $this->type = $type;

        return $this;
    }
}
