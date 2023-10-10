<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mon_service = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Date_creation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonService(): ?string
    {
        return $this->mon_service;
    }

    public function setMonService(?string $mon_service): static
    {
        $this->mon_service = $mon_service;

        return $this;
    }

    public function getDateCreation(): ?string
    {
        return $this->Date_creation;
    }

    public function setDateCreation(?string $Date_creation): static
    {
        $this->Date_creation = $Date_creation;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;

        return $this;
    }
}
