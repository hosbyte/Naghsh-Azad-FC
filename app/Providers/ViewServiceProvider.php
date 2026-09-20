<?php

namespace App\Providers;

use App\Models\League;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $premierLeagues = League::where('level', 'premier')
                ->where('is_active', true)
                ->orderBy('id')
                ->get();

            $divisionOneLeagues = League::where('level', 'division1')
                ->where('is_active', true)
                ->orderBy('id')
                ->get();
            
            $view->with([
                'premierLeagues' => $premierLeagues,
                'divisionOneLeagues' => $divisionOneLeagues,
            ]);
        });
    }
}
