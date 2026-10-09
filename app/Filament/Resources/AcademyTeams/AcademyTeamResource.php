<?php

namespace App\Filament\Resources\AcademyTeams;

use App\Filament\Resources\AcademyTeams\Pages\CreateAcademyTeam;
use App\Filament\Resources\AcademyTeams\Pages\EditAcademyTeam;
use App\Filament\Resources\AcademyTeams\Pages\ListAcademyTeams;
use App\Filament\Resources\AcademyTeams\Schemas\AcademyTeamForm;
use App\Filament\Resources\AcademyTeams\Tables\AcademyTeamsTable;
use App\Models\AcademyTeam;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AcademyTeamResource extends Resource
{
    protected static ?string $model = AcademyTeam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static string|UnitEnum|null $navigationGroup = 'حضور و غیاب';

    protected static ?string $navigationLabel = 'تیم‌ها';

    protected static ?string $modelLabel = 'تیم';

    protected static ?string $pluralModelLabel = 'تیم‌ها';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AcademyTeamForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AcademyTeamsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAcademyTeams::route('/'),
            'create' => CreateAcademyTeam::route('/create'),
            'edit' => EditAcademyTeam::route('/{record}/edit'),
        ];
    }
}
