<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\PlayerOverview;
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

    protected function getHeaderWidgets(): array
    {
        return [
            PlayerOverview::class,
        ];
    }
}
