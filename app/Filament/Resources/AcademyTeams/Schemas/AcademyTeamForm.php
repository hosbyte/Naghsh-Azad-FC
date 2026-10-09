<?php

namespace App\Filament\Resources\AcademyTeams\Schemas;

use App\Models\Coach;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AcademyTeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('age_group _id')
                    ->label('رده سنی')
                    ->relationship('ageGroup' , 'name')
                    ->required()
                    ->searchable()
                    ->preload(),

                Select::make('coach_id')
                    ->label('مربی')
                    ->relationship(
                        name: 'coach',
                        titleAttribute: 'first_name',
                    )
                    ->getOptionLabelFromRecordUsing(
                        fn (Coach $record): string =>
                            "{$record->first_name} {$record->last_name}"
                    )
                    ->searchable(['first_name', 'last_name'])
                    ->preload()
                    ->nullable()
                    ->helperText('اختیاری است؛ می‌توانید بعداً مربی را به تیم اختصاص دهید.'),

                TextInput::make('name')
                    ->label('نام تیم')
                    ->required()
                    ->maxLength(255),

                Toggle::make('is_active')
                    ->label('وضعیت')
                    ->default(true),

                TextInput::make('sort_able')
                    ->label('ترتیب نمایش')
                    ->required()
                    ->numeric()
                    ->integer()
                    ->minValue(0)
                    ->default(0),
            ]);
    }
}
