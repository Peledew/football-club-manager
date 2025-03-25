<?php

namespace App\Service;

use App\Dto\UserDto;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\Contract\IUserService;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class UserService implements IUserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function findById(int $id): ?UserDto
    {
        $user = $this->userRepository->findById($id);
        return $user ? $this->mapUserToUserDto($user) : null;

    }

    public function findAll(): Collection
    {
        $users = $this->userRepository->findAll();
        return $users->map(fn(User $user) => $this->mapUserToUserDto($user));
    }

    public function save(UserDto $user): void
    {
        // TODO: Implement save() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }

    private function mapUserToUserDto(User $user): UserDto
    {
        $userDto = new UserDto();
        $userDto->setId($user->getId());
        $userDto->setUsername($user->getUsername());
        $userDto->setEmail($user->getEmail());
        $userDto->setRole($user->getRole());
        $userDto->setPosition($user->getPosition());
        $userDto->setPerformances($user->getPerformances());
        $userDto->setFirstName($user->getFirstName());
        $userDto->setLastName($user->getLastName());

        return $userDto;
    }

}