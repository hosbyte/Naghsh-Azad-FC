<?php

namespace App\Filament\Resources\PlayerRegistrations;

use App\Filament\Resources\PlayerRegistrations\Pages\CreatePlayerRegistration;
use App\Filament\Resources\PlayerRegistrations\Pages\EditPlayerRegistration;
use App\Filament\Resources\PlayerRegistrations\Pages\ListPlayerRegistrations;
use App\Filament\Resources\PlayerRegistrations\Schemas\PlayerRegistrationForm;
use App\Filament\Resources\PlayerRegistrations\Tables\PlayerRegistrationsTable;
use App\Models\PlayerRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PlayerRegistrationResource extends Resource
{
    protected static ?string $model = PlayerRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'PlayerRegistration';

    protected static ?string $navigationLabel = 'ایست ثبت نام کننده ها';

    protected static ?string $pluralLabel = 'ایست ثبت نام کننده ها';

    protected static ?string $modelLabel = 'ایست ثبت نام کننده ها';

    public static function form(Schema $schema): Schema
    {
        return PlayerRegistrationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PlayerRegistrationsTable::configure($table);
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
            'index' => ListPlayerRegistrations::route('/'),
            'create' => CreatePlayerRegistration::route('/create'),
            'edit' => EditPlayerRegistration::route('/{record}/edit'),
        ];
    }
}
