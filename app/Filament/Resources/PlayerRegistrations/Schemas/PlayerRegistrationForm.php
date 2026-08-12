<?php

namespace App\Filament\Resources\PlayerRegistrations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlayerRegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('نام')
                    ->required(),

                TextInput::make('family')
                    ->label('نام خانوادگی')
                    ->required(),

                TextInput::make('father_name')
                    ->label('نام پدر')
                    ->required(),

                TextInput::make('father_phone')
                    ->label('موبایل پدر')
                    ->tel()
                    ->required(),

                TextInput::make('mother_phone')
                    ->label('موبایل مادر')
                    ->tel()
                    ->required(),


                DatePicker::make('birth_date')
                    ->label('تاریخ تولد')
                    ->required(),


                TextInput::make('position')
                    ->label('پست تخصصی')
                    ->required(),

                TextInput::make('favorite_number')
                    ->label('شماره موردعلاقه')
                    ->required(),


                TextInput::make('foot')
                    ->label('پای تخصصی')
                    ->required(),


                Select::make('status')
                    ->label('وضعیت')
                    ->options([

                        'new' => 'جدید',

                        'called' => 'تماس گرفته شد',

                        'scheduled' => 'زمان تست مشخص شد',

                        'accepted' => 'پذیرفته شد',

                        'rejected' => 'رد شد',

                    ])
                    ->default('new')
                    ->required(),
            ]);
    }
}
