<?php

namespace App\Filament\Resources\Schedules\Schemas;

use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('عنوان')
                    ->required(),

                Select::make('event_type')
                    ->label('نوع رویداد')
                    ->searchable()
                    ->options([
                        'training' => 'تمرین',
                        'match' => 'مسابقه',
                        'camp' => 'اردو',
                        'meeting' => 'جلسه',
                        'test' => 'تست',
                        'other' => 'سایر',
                    ])
                    ->required()
                    ->default('training')
                    ->placeholder('انتخاب نوع رویداد'),

                Select::make('status')
                    ->label('وضعیت')
                    ->options([
                        'confirmed' => 'تایید شده',
                        'pending' => 'در انتظار تایید',
                        'cancelled' => 'لغو شده',
                    ])
                    ->required()
                    ->default('confirmed')
                    ->placeholder('انتخاب وضعیت برنامه'),

                CheckboxList::make('age_group')
                    ->label('رده سنی')
                    ->options([
                        'kids' => 'نونهالان',
                        'teenagers' => 'نوجوانان',
                        'youth' => 'جوانان',
                    ])
                    ->columns(3)
                    ->required(),

                DatePicker::make('date')
                    ->label('تاریخ')
                    ->jalali()
                    ->required(),

                TimePicker::make('start_time')
                    ->label('ساعت شروع')
                    ->seconds(false)
                    ->required(),

                TimePicker::make('end_time')
                    ->label('ساعت پایان')
                    ->seconds(false)
                    ->required(),

                TextInput::make('location')
                    ->label('مکان')
                    ->required(),

                TextInput::make('description')
                    ->label('توضیحات')
                    ->maxLength(100),

                
            ]);
    }
}
