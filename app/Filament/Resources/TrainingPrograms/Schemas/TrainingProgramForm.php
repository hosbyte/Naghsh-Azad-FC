<?php

namespace App\Filament\Resources\TrainingPrograms\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TrainingProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('عنوان')->required(),
                TextInput::make('description')->label('توضیحات')->required(),
                Select::make('age_group')->label('رده سنی')->multiple()->searchable()
                    ->options([
                        'kids' => 'نونهالان' ,
                        'teenagers' => 'نوجوانان',
                        'Youth' => 'جوانان',
                    ])
                    ->required()->placeholder('انتخاب گروه سنی'),
                    Select::make('user_id')->relationship('user' , 'name')->label('نویسنده')->required(),
                    Toggle::make('is_featured')->label('تمرین ویژه')->default(false),
            ]);
    }
}
