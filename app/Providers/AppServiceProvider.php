<?php
namespace App\Providers;

use App\Repositories\Post\PostRepositoryClass;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\User\UserRepositoryClass;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserRepositoryInterface::class => UserRepositoryClass::class,
        PostRepositoryInterface::class => PostRepositoryClass::class,
    ];

    public function register()
    {

    }

    public function boot()
    {

    }
}
