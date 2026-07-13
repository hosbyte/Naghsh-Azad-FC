<?php

namespace App\Filament\Resources\TrainingPrograms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class TrainingProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('عنوان')
                    ->required(),

                TextInput::make('description')
                    ->label('توضیحات')
                    ->required(),

                Select::make('age_group')
                    ->label('رده سنی')
                    ->multiple()
                    ->searchable()
                    ->options([
                        'kids' => 'نونهالان' ,
                        'teenagers' => 'نوجوانان',
                        'youth' => 'جوانان',
                    ])
                    ->required()->placeholder('انتخاب گروه سنی'),

                Select::make('user_id')
                    ->relationship('user' , 'name')
                    ->label('نویسنده')
                    ->required(),

                Toggle::make('is_featured')
                    ->label('تمرین ویژه')
                    ->live()
                    ->default(false),

                Textarea::make('benefits')
                    ->label('اهداف تمرین')
                    ->placeholder('اهداف را با - جدا کنید.')
                    ->helperText('مثال: افزایش سرعت - تقویت شوت - کنترل توپ')
                    ->visible(fn ($get) => $get('is_featured'))
                    ->required(fn ($get) => $get('is_featured'))
                    ->columnSpanFull(),

                FileUpload::make('media_path')
                    ->label('بارگذاری عکس یا فیلم')
                    ->disk('public')
                    ->directory('trainings')
                    ->acceptedFileTypes(['image/*' , 'video/*']) // پذیرش عکس و ویدیو
                    ->maxSize(102400) // ۱۰۰ مگابایت برای ویدیو
                    ->helperText('می‌توانید عکس یا ویدیو آپلود کنید. حداکثر ۱۰۰ مگابایت.'),
            ]);
    }
}
