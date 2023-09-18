<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
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

    
    
    private function registerViewComposer()
    {
        view()->composer('*', function ($view) {
            $view->with('authUser', Auth::user());
        });
    }

    public function boot()
    {
        view()->composer('*', function ($view) {
            $view->with('authUser', Auth::user());
        });
    }
}
