<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController
{
    #[Route(path: "/api/v1/user", name: "users-get", methods: ["GET"])]
    public function getUsers()
    {
        return new JsonResponse([
            "status" => "success",
            "data" => [
                [
                    "id" => 1,
                    "name" => "nurbek",
                ]
            ]
        ]);
    }

    #[Route(path: "/api/v1/user", name: "users-create", methods: ["POST"])]
    public function createUser(Request $request)
    {
        return new JsonResponse([
            "status" => "success",
            "data" => [
                [
                    "id" => 1,
                    "name" => "nurbek",
                ]
            ]
        ]);
    }
}
