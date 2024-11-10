<?php

namespace App\Providers;

use App\Interfaces\CategoryInterface;
use App\Repositories\CategorieRepository;
use Illuminate\Support\ServiceProvider;

class categoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryInterface::class, CategorieRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
