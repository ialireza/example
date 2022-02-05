<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    private $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        dump(
            'USER 1',
            $this->repository->itemsWith('posts')->toArray()
        );

        dump(
            'USER 2',
            $this->repository->getUsersWithPost()->toArray()
        );
        
        dd('USER 3',
            $this->repository->getAll()
        );
    }
}
