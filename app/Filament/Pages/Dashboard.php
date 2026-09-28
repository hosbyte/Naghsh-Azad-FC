<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Page
{
    // protected string $view = 'filament.pages.dashboard';
    public function mount(): void
    {
        if(Auth::user()?->isAdmin())
        {
            $this->redirect(
                LeagueDashboard::getUrl()
            );
        }
    }
}
