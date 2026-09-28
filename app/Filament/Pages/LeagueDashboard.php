<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\LeagueMatch;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use App\Models\League;
use BackedEnum;
use UnitEnum;

class LeagueDashboard extends Page
{
    protected static ?string $title= 'داشبورد مدیریت لیگ';

    protected static ?string $navigationLabel = 'داشبورد لیگ';

    protected static string|UnitEnum|null $navigationGroup = 'مدیریت لیگ';

    protected static ?string $slug = 'league-dashboard';

    protected string $view = 'filament.pages.league-dashboard';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';

    public static function canAccess(): bool
    {
        return Auth::user()?->isAdmin() ?? false;
    }

    public function getLeagueCount(): int
    {
        return League::where('is_active', true)->count();
    }

    public function getTeamCount(): int
    {
        return Team::count();
    }

    public function getMatchCount(): int
    {
        return LeagueMatch::count();
    }
}
