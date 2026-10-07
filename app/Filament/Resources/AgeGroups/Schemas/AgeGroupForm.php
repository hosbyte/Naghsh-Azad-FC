<?php

namespace App\Filament\Resources\AgeGroups\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

use function Laravel\Prompts\textarea;

class AgeGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام رده سنی')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('توضیحات')
                    ->nullable()
                    ->rows(3)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('فعال')
                    ->default(true),

                TextInput::make('sort_order')
                    ->label('ترتیب نمایش')
                    ->required()
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->default(0),
            ]);
    }
}
