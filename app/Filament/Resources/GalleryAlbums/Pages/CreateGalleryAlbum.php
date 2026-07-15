<?php

namespace App\Filament\Resources\GalleryAlbums\Pages;

use App\Filament\Resources\GalleryAlbums\GalleryAlbumResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;


class CreateGalleryAlbum extends CreateRecord
{
    protected static string $resource = GalleryAlbumResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResourceUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // ساخت slug
        $data['slug'] = Str::slug($data['title']);

        // گرفتن تصاویر موقت
        $this->images = $data['images'] ?? [];

        // حذف از داده‌هایی که قرار است در gallery_albums ذخیره شوند
        unset($data['images']);

        return $data;
    }

    protected function afterCreate(): void
    {
        foreach ($this->images as $image)
        {
            $this->record->images()->create([
                'image_path' => $image,
            ]);
        }
    }

    protected function getCreatedNotification(): ? Notification
    {
        return Notification::make()->success()->title('آلبوم جدید ثبت شد');
    }

    protected array $images = [];
}
