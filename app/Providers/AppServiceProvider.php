<?php

namespace App\Providers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Composer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Database\Factories\PhoneNumberProvider;
use Faker\Generator as FakerGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->extend(FakerGenerator::class, function ($faker) {
            $faker->addProvider(new PhoneNumberProvider($faker));
            return $faker;
        });
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
