<?php

namespace App\Service\Contract;

use App\Dto\UserDto;
use Doctrine\Common\Collections\Collection;

interface IUserService
{
    public function findById(int $id): ?UserDto;

    public function findAll(): Collection;

    public function save(UserDto $user): void;

    public function delete(int $id): void;
}