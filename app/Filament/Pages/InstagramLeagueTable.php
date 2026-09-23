<?php

namespace App\Filament\Pages;

use App\Models\League;
use App\Services\LeagueStandingsService;
use Filament\Forms\Components\Select;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Override;

class InstagramLeagueTable extends Page
{
    protected static ?string $title = 'جدول اینستاگرام';

    protected static ?string $navigationLabel = 'جدول اینستاگرام';

    protected static string|\UnitEnum|null $navigationGroup = 'مدیریت لیگ';

    protected static ?string $slug = 'league-instagram';

    protected string $view = 'filament.pages.instagram-league-table';

    public ?int $leagueId = null;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

            Section::make('انتخاب جدول')
                ->schema([
                    Select::make('leagueId')
                    ->label('جدول لیگ')
                    ->options(
                        League::query()
                            ->where('is_active', true)
                            ->orderBy('level')
                            ->orderBy('id')
                            ->get()
                            ->mapWithKeys(function ($league) {
                                $level = $league->level === 'premier' ? 'لیگ برتر'  : 'لیگ دسته 1';

                                return [
                                    $league->id => "{$level} - {$league->name}",
                                ];
                            })
                    )
                    ->searchable()
                    ->preload()
                    ->live()
                    ->required(),
                ])
                ->columns(1),
            ]);
    }

    public function getViewData(): array
    {
        if(! $this->leagueId)
        {
            return [
                'league' => null,
                'standings' => null,
            ];
        }

        $league = League::query()
            ->where('is_active', true)
            ->find($this->leagueId);

        if(! $league)
        {
            return [
                'league' => null,
                'standings' => null,
            ];
        }

        $standings = app(LeagueStandingsService::class)
            ->getStandings($league);

        return [
            'league' => $league,
            'standings' => $standings,
        ];
    }
}
