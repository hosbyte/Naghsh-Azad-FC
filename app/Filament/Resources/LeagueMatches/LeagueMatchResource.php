<?php

namespace App\Filament\Resources\LeagueMatches;

use App\Filament\Resources\LeagueMatches\Pages\CreateLeagueMatch;
use App\Filament\Resources\LeagueMatches\Pages\EditLeagueMatch;
use App\Filament\Resources\LeagueMatches\Pages\ListLeagueMatches;
use App\Filament\Resources\LeagueMatches\Schemas\LeagueMatchForm;
use App\Filament\Resources\LeagueMatches\Tables\LeagueMatchesTable;
use App\Models\LeagueMatch;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use UnitEnum;
use Filament\Tables\Table;

class LeagueMatchResource extends Resource
{
    protected static ?string $model = LeagueMatch::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $recordTitleAttribute = 'LeagueMatch';
    protected static ?string $navigationLabel = 'نتایج بازی ها';
    protected static ?string $modelLabel = 'نتایج بازی';
    protected static ?string $pluralModelLabel = 'نتیج بازی ها';
    protected static string|UnitEnum|null $navigationGroup = 'مدیریت لیگ';

    public static function form(Schema $schema): Schema
    {
        return LeagueMatchForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LeagueMatchesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLeagueMatches::route('/'),
            'create' => CreateLeagueMatch::route('/create'),
            'edit' => EditLeagueMatch::route('/{record}/edit'),
        ];
    }
}
