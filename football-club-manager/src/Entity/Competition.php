<?php

namespace App\Entity;

use App\Repository\CompetitionRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetitionRepository::class)]
class Competition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 100)]
    private string $name; // Name of the competition (e.g., "Championship 2025")

    #[ORM\OneToMany(targetEntity: Game::class, mappedBy: 'competition')]
    private Collection $games;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getGames(): Collection
    {
        return $this->games;
    }

    public function setGames(Collection $games): void
    {
        $this->games = $games;
    }


}