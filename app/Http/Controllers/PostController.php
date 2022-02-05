<?php

namespace App\Http\Controllers;

use App\Repositories\Post\PostRepositoryClass;

class PostController extends Controller
{
    public function index(PostRepositoryClass $posts)
    {
        dump(
            'POST 1',
            $posts->itemsWith('user')->toArray()
        );

        dump(
            'POST 2',
            $posts->getPostsWithUser()->toArray()
        );

        dump(
            'POST 3',
            $posts->selectedItem('id', 2)->toArray()
        );
    }
}
