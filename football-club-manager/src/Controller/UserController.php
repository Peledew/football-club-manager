<?php

namespace App\Controller;

use App\Service\Contract\IUserService;
use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class UserController extends AbstractController
{
    private IUserService $userService;
    private SerializerInterface $serializer;
    public function __construct(IUserService $userService, SerializerInterface $serializer)
    {
        $this->userService = $userService;
        $this->serializer = $serializer;
    }
    #[Route('/api/users', methods: ['GET'])]
    public function index(): JsonResponse
    {
        $users = $this->json($this->userService->findAll());
        $jsonContent = $this->serializer->serialize($users, 'json');

        return JsonResponse::fromJsonString($jsonContent);
    }
}