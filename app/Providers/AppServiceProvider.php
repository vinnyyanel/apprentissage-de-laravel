<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
{
    $this->app->bind(
        'App\Providers\Repositories\PhotoRepositoryInterface',
        'App\Providers\Repositories\PhotosRepository'
    );
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['index', 'create'], function ($view) {
            $view->with('categories', Category::all());
        });
    }
}
