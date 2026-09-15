<?php

namespace App\Filament\Resources\Leagues\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class LeagueForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام رده سنی')
                    ->required()
                    ->maxLength(255),

                Select::make('level')
                    ->label('سطح لیگ')
                    ->options([
                        'premier' => 'لیگ برتر',
                        'division1' => 'لیگ دسته 1',
                    ])
                    ->required(),

                Toggle::make('is_active')
                    ->label('فعال باشد')
                    ->default(true),
            ]);
    }
}
