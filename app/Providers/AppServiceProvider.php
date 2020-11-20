<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::if('Logged', function() {
            // “auth” es el sistema de autenticación que estamos utilizando
            // y “check” nos dice si el usuario está o no autentificado
            return auth()->check();
        });

        \Blade::if('LoggedTute', function() {
            return auth()->check() && auth()->user()->type == 'tut_e';
        });

        \Blade::if('LoggedAdminTute', function() {
            return auth()->check() && (auth()->user()->type == 'ad' || auth()->user()->type == 'tut_e');
        });

        \Blade::if('LoggedAlum', function() {
            return auth()->check() && auth()->user()->type == 'al';
        });

        \Blade::if('LoggedAdmin', function() {
            return auth()->check() && auth()->user()->type == 'ad';
        });
        
        \Blade::if('LoggedAdminAlum', function() {
            return auth()->check() && (auth()->user()->type == 'ad' || auth()->user()->type == 'al');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
