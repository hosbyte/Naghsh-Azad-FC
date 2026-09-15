<?php

namespace App\Filament\Resources\LeagueMatches\Schemas;

use App\Models\League;
use App\Models\Team;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;

class LeagueMatchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('league_id')
                    ->label('لیگ')
                    ->relationship(
                        name: 'league',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn(Builder $query) => $query
                            ->orderBy('level')
                            ->orderBy('id'),
                    )
                    ->getOptionLabelFromRecordUsing(
                        fn (League $record): string => 
                            ($record->level === 'permier' ? 'دسته یک' : 'لیگ برتر')
                        . ' - '
                        . $record->name
                    )
                    ->required()
                    ->searchable()
                    ->preload()
                    ->live()
                    ->afterStateUpdated(function ($stats, Set $set) {
                        $set('home_team_id', null);
                        $set('away_team_id', null);
                    }),

                Select::make('home_team_id')
                    ->label('تیم میزبان')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->options(function (Get $get) {
                        $leagueId = $get('league_id');

                        if(!$leagueId) 
                        {
                            return [];
                        }

                        return Team::query()
                            ->whereHas('leagues', function (Builder $query) use ($leagueId) {
                                $query->where('leagues.id', $leagueId);
                            })
                            ->orderBy('name')
                            ->pluck('name', 'id');
                    })
                    ->rules(function (Get $get) {
                        return [
                            Rule::exists('league_team', 'team_id')
                                ->where('league_id', $get('league_id')),

                            'different:away_team_id',
                        ];
                    }),

                    TextInput::make('home_score')
                        ->label('گل تیم میزبان')
                        ->numeric()
                        ->integer()
                        ->minValue(0)
                        ->required(),

                    Select::make('away_team_id')
                        ->label('تیم مهمان')
                        ->required()
                        ->searchable()
                        ->preload()
                        ->options(function (Get $get) {
                            $leagueId = $get('league_id');

                            if(!$leagueId)
                            {
                                return [];
                            }

                            return Team::query()
                                ->whereHas('leagues', function (Builder $query) use ($leagueId) {
                                    $query->where('leagues.id', $leagueId);
                                })
                                ->orderBy('name')
                                ->pluck('name', 'id');
                        })
                        ->rules(function (Get $get) {
                            return [
                                Rule::exists('league_team', 'team_id')
                                    ->where('league_id', $get('league_id')),

                                'different:home_team_id',
                            ];
                        }),

                    TextInput::make('away_score')
                        ->label('گل تیم مهمان')
                        ->numeric()
                        ->integer()
                        ->minValue(0)
                        ->required(),
            ])
            ->columns(2);
    }
}
