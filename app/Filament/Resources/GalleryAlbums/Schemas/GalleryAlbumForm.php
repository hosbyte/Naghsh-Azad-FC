<?php

namespace App\Filament\Resources\GalleryAlbums\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryAlbumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('عنوان آلبوم')
                    ->required(),


                Textarea::make('description')
                    ->label('توضیحات')
                    ->columnSpanFull(),


                FileUpload::make('cover_image')
                    ->label('تصویر کاور')
                    ->disk('public')
                    ->directory('gallery/covers')
                    ->image()
                    ->required(),
            ]);
    }
}
