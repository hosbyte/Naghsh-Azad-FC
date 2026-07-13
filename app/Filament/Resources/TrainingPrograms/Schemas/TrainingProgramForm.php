<?php

namespace App\Filament\Resources\TrainingPrograms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
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
                TextInput::make('title')->label('عنوان')->required(),
                TextInput::make('description')->label('توضیحات')->required(),
                Select::make('age_group')->label('رده سنی')->multiple()->searchable()
                    ->options([
                        'kids' => 'نونهالان' ,
                        'teenagers' => 'نوجوانان',
                        'youth' => 'جوانان',
                    ])
                    ->required()->placeholder('انتخاب گروه سنی'),
                    Select::make('user_id')->relationship('user' , 'name')->label('نویسنده')->required(),
                    Toggle::make('is_featured')->label('تمرین ویژه')->default(false),
                    FileUpload::make('media_path')->label('بارگذاری عکس یا فیلم')
                        ->disk('public')
                        ->directory('trainings')
                        ->acceptedFileTypes(['image/*' , 'video/*']) // پذیرش عکس و ویدیو
                        ->maxSize(102400) // ۱۰۰ مگابایت برای ویدیو
                        // ->live() // برای اینکه با هر آپلود، بلافاصله تغییرات را حس کند
                        ->helperText('می‌توانید عکس یا ویدیو آپلود کنید. حداکثر ۱۰۰ مگابایت.'),
            ]);
    }
}
