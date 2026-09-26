<?php

namespace App\Filament\Pages;

use App\Models\League;
use App\Services\LeagueStandingsService;
use Filament\Forms\Components\Select;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Override;
use Spatie\Browsershot\Browsershot;

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

    public function downloadInstagramTable()
    {
        if(! $this->leagueId)
        {
            return;
        }

        $league = League::query()
            ->where('is_active', true)
            ->findOrFail($this->leagueId);

        $standings = app(LeagueStandingsService::class)
            ->getStandings($league);

        $tableHtml = view('leagues.instagram-table', [
            'league' => $league,
            'standings' => $standings,
            'exportMode' => true,
        ])->render();

        $cssPath = public_path('css/instagram-league.css');

        $css = file_get_contents($cssPath);

        $html = <<<HTML
            <!DOCTYPE html>
            <html lang="fa" dir="rtl">
            <head>
                <meta charset="UTF-8">

                <style>
                    {$css}

                    html,
                    body {
                        margin: 0;
                        padding: 0;
                        background: transparent;
                    }
                </style>
            </head>

            <body>
                {$tableHtml}
            </body>
            </html>
        HTML;

        $directory = storage_path('app/temp');

        if(! is_dir(dirname($directory)))
        {
            mkdir(dirname($directory), 0755, true);
        }

        $path = $directory . 'league-instagram-' . $league->id . '.png';

        Browsershot::html($html)
            ->setNodeBinary('E:\\app\node js\\node.exe')
            ->setChromePath('C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe')
            ->windowSize(915, 1400)
            ->deviceScaleFactor(1)
            ->waitUntilNetworkIdle()
            ->save($path);

        return response()
            ->download(
                $path,
                'جدول-' . $league->name . '.png',
                ['Content-Type' => 'image/png']
            )
            ->deleteFileAfterSend(true);
    }
}
