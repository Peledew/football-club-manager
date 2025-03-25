<?php

namespace App\Entity;


use App\Repository\GameRepository;
use DateTime;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'datetime')]
    private DateTime $date;

    #[ORM\ManyToOne(targetEntity: Competition::class, inversedBy: 'games')]
    #[ORM\JoinColumn(nullable: false)]
    private Competition $competition; // The competition this game is part of

    #[ORM\OneToMany(targetEntity: Performance::class, mappedBy: 'game')]
    private Collection $performances;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function getCompetition(): Competition
    {
        return $this->competition;
    }

    public function setCompetition(Competition $competition): void
    {
        $this->competition = $competition;
    }

    public function getPerformances(): Collection
    {
        return $this->performances;
    }

    public function setPerformances(Collection $performances): void
    {
        $this->performances = $performances;
    }


}