<?php

namespace App\Dto;

use App\Entity\Performance;
use App\Enum\UserRole;
use Doctrine\Common\Collections\Collection;

class UserDto
{
    private ?int $id = null;
    private string $username;
    private string $email;
    private UserRole $role;
    private string $position;
    private Collection $performances;
    private ?string $firstName = null;
    private ?string $lastName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getRole(): UserRole
    {
        return $this->role;
    }

    public function setRole(UserRole $role): void
    {
        $this->role = $role;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getPerformances(): Collection
    {
        return $this->performances;
    }

    public function setPerformances(Collection $performances): void
    {
        $this->performances = $performances;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }



}