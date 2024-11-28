<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // in questo modo abbiamo in ogni vista l'oggetto categoria
        if(Schema::hasTable('categories')){
            $categories = Category::all();
            View::share('categories', $categories);
        }
    }
}
