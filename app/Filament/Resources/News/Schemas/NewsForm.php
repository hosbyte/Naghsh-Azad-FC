<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('عنوان')->required(),
                // TextInput::make('slug')->label(),
                TextInput::make('content')->label('متن خبر')->columnSpanFull()->required(),
                FileUpload::make('image_path')->label('بارگذاری تصویر')->directory('news')->image()->disk('news'),
                Select::make('user_id')->relationship('user', 'name')->label('نویسنده')->required(),
                Toggle::make('is_published')->label('منتشر شده')->default(true),
            ]);
    }
}
