<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('contacts', ['+91 888-785-1016']);
        View::share('addresses', ['Kakadev, Kanpur, U.P.']);
        View::share('emails', ['info@webfreakdevelopment.com','hr@webfreakdevelopment.com']);
        View::share('facebook', 'https://www.facebook.com/people/WebFreak/100078702931349/');
        View::share('instagram', 'https://www.instagram.com/webfreak.development/');
        View::share('twitter', 'https://x.com/WebFreakDev');
        View::share('linkedin', 'https://www.linkedin.com/company/webfreak-development');
    }
}
