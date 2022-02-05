<?php
namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\AppRepository;

class UserRepositoryClass extends AppRepository implements UserRepositoryInterface
{
    public function myModel(): string
    {
        return User::class;
    }

    public function getUsersWithPost()
    {
        return User::active()
            ->with('posts')
            ->get();
    }
}
