<?php

namespace App\Repositories\Post;

use App\Models\Post;
use App\Repositories\AppRepository;

class PostRepositoryClass extends AppRepository implements PostRepositoryInterface
{
    public function myModel(): string
    {
        return Post::class;
    }

    public function getPostsWithUser()
    {
        return Post::with('user')
            ->whereHas('user', function ($q) {
                $q->active();
            })->get();
    }
}
