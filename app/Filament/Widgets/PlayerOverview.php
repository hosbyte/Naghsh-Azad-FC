<?php

namespace App\Filament\Widgets;

use App\Models\League;
use App\Models\LeagueMatch;
use App\Models\PlayerRegistration;
use App\Models\Team;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PlayerOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $player_count = PlayerRegistration::query()->count();
        $league_count = League::query()->count();
        $match_count = LeagueMatch::query()->count();
        $team_count = Team::query()->count();
        return [
            Stat::make('تعداد نفرات ثبت نام کننده', $player_count)
                // ->description('تعداد کل فرم‌های ثبت‌شده')
                ->icon('heroicon-o-user-plus'),

            Stat::make('تعداد لیگ ها', $league_count)
                // ->description('تعداد کل فرم‌های ثبت‌شده')
                ->icon('heroicon-o-trophy'),

            Stat::make('تعداد بازی های انجام شده', $match_count)
                // ->description('تعداد کل فرم‌های ثبت‌شده')
                ->icon('heroicon-o-trophy'),

            Stat::make('تعداد تیم ها', $team_count)
                // ->description('تعداد کل فرم‌های ثبت‌شده')
                ->icon('heroicon-o-users'),

            
        ];
    }
}
