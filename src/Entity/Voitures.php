<?php

namespace App\Entity;

use App\Controller\VoituresController;
use App\Repository\VoituresRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: VoituresRepository::class)]
#[apiResource(
    itemOperations: [
        'get',
        'delete',
        'put'
    ]
)]
class Voitures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $Marque;

    #[ORM\Column(type: 'string', length: 255)]
    private $Models;

    #[ORM\Column(type: 'text')]
    private $Description;

    #[ORM\Column(type: 'string', length: 255)]
    private $AnneSortie;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'datetime')]
    private $CreatedAt;

    #[ORM\Column(type: 'datetime')]
    private $UpdatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->Marque;
    }

    public function setMarque(string $Marque): self
    {
        $this->Marque = $Marque;

        return $this;
    }

    public function getModels(): ?string
    {
        return $this->Models;
    }

    public function setModels(string $Models): self
    {
        $this->Models = $Models;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getAnneSortie(): ?string
    {
        return $this->AnneSortie;
    }

    public function setAnneSortie(string $AnneSortie): self
    {
        $this->AnneSortie = $AnneSortie;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(\DateTimeInterface $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->UpdatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $UpdatedAt): self
    {
        $this->UpdatedAt = $UpdatedAt;

        return $this;
    }
}
