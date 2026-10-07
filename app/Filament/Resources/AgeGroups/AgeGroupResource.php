<?php

namespace App\Filament\Resources\AgeGroups;

use App\Filament\Resources\AgeGroups\Pages\CreateAgeGroup;
use App\Filament\Resources\AgeGroups\Pages\EditAgeGroup;
use App\Filament\Resources\AgeGroups\Pages\ListAgeGroups;
use App\Filament\Resources\AgeGroups\Schemas\AgeGroupForm;
use App\Filament\Resources\AgeGroups\Tables\AgeGroupsTable;
use App\Models\AgeGroup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AgeGroupResource extends Resource
{
    protected static ?string $model = AgeGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'حضور و غیاب';

    protected static ?string $navigationLabel = 'رده‌های سنی';

    protected static ?string $modelLabel = 'رده سنی';

    protected static ?string $pluralModelLabel = 'رده‌های سنی';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return AgeGroupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AgeGroupsTable::configure($table);
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
            'index' => ListAgeGroups::route('/'),
            'create' => CreateAgeGroup::route('/create'),
            'edit' => EditAgeGroup::route('/{record}/edit'),
        ];
    }
}