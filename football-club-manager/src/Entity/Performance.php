<?php

namespace App\Entity;

use App\Repository\PerformanceRepository;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: PerformanceRepository::class)]
class Performance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'float')]
    private float $playerScore; // Player's score for the game

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'performances')]
    #[ORM\JoinColumn(nullable: false)]
    private User $user; // Reference to the player (user)

    #[ORM\ManyToOne(targetEntity: Game::class, inversedBy: 'performances')]
    #[ORM\JoinColumn(nullable: false)]
    private Game $game;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerScore(): float
    {
        return $this->playerScore;
    }

    public function setPlayerScore(float $playerScore): void
    {
        $this->playerScore = $playerScore;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function setGame(Game $game): void
    {
        $this->game = $game;
    } // Reference to the game the performance belongs to


}