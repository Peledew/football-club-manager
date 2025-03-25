<?php

namespace App\Repository\Contract;

use App\Entity\User;
use Doctrine\Common\Collections\Collection;

interface IUserRepository
{
    public function findById(int $id): ?User;

    public function findAll(): Collection;

    public function save(User $user): void;

    public function delete(int $id): void;
}