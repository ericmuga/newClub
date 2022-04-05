<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Inertia::share('errors', fn()=> session()->get('errors') ? session()->get('errors')->getBag('default')->getMessages() : (object) []);
        Inertia::share('flash.message', fn()=> session()->get('flash.message') ? session()->get('flash.message'): (object) []);
        Inertia::share('flash.type', fn()=> session()->get('flash.type') ? session()->get('flash.type'): (object) []);


        Inertia::share('appName', config('app.name'));

        Inertia::share('auth.user', fn (Request $request) => $request->user()
            ? $request->user()->only('id', 'name', 'email')
            : null
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
