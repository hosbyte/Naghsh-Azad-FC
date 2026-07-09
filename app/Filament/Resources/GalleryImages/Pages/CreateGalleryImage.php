<?php

namespace App\Filament\Resources\GalleryImages\Pages;

use App\Filament\Resources\GalleryImages\GalleryImageResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateGalleryImage extends CreateRecord
{
    protected static string $resource = GalleryImageResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $date['slug'] = Str::slug($data['title']);

        return $date;
    }
}
