<?php

namespace App\Repositories;

use App\Repositories\PostInterface;
use App\Repositories\PostRepository;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            PostInterface::class,
            PostRepository::class
        );
    }
}


