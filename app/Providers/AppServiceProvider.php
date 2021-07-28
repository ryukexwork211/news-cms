<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        // Bind interface to repository
        $this->app->singleton(
            \App\Repositories\Interfaces\CategoryRepositoryInterface::class,
            \App\Repositories\CategoriesRepository::class
        );
        $this->app->singleton(
            \App\Repositories\Interfaces\NewsRepositoryInterface::class,
            \App\Repositories\NewsRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Custom validate

        // Validate slug
        Validator::extend('slug', function ($attribute, $value, $parameters, $validator) {
            if (!empty($value)) {
                return preg_match('/^(\w+)(-\s*\w+)*$/', $value);
            }
            return true;
        });
    }
}
