<?php

namespace Kamicloud\LaravelStubApiLarecipe;

use BinaryTorch\LaRecipe\LaRecipe;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        LaRecipe::style('laravel-stub-api-larecipe', __DIR__.'/../resources/css/theme.css');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
