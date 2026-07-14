<?php

namespace App\Filament\Resources\GalleryAlbums\RelationManagers;

use App\Filament\Resources\GalleryAlbums\GalleryAlbumResource;
// use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
use App\Models\GalleryImage;
use Filament\Notifications\Notification;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    protected static ?string $relatedResource = GalleryAlbumResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                FileUpload::make('image_path')
                    ->label('تصویر')
                    ->disk('public')
                    ->directory('gallery/images')
                    ->image()
                    ->required(),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('image_path')
                    ->label('تصویر')
                    ->disk('public'),

            ])

            ->headerActions([
                // CreateAction::make(),
                Action::make('uploadImages')
                    ->label('آپلود تصاویر')
                    ->icon('heroicon-o-photo')
                    ->form([
                        FileUpload::make('images')
                            ->label('تصاویر')
                            ->disk('public')
                            ->directory('gallery/images')
                            ->multiple()
                            ->maxFiles(10)
                            ->image()
                            ->required(),
                    ])

                    ->action(function (array $data) 
                    {
                        $currentImages = $this->getOwnerRecord()
                            ->images()
                            ->count();

                        // تعداد عکس‌های جدیدی که انتخاب شده
                        $newImages = count($data['images']);


                        // بررسی محدودیت ۱۰ عکس
                        if ($currentImages + $newImages > 10) {

                            Notification::make()
                                ->title('حداکثر ۱۰ تصویر برای هر آلبوم مجاز است')
                                ->danger()
                                ->send();

                            return;
                        }

                        foreach ($data['images'] as $image)
                        {
                            GalleryImage::create([
                                'gallery_album_id' => $this->getOwnerRecord()->id,
                                'image_path' => $image,
                            ]);
                        }
                    })
            ])

            ->recordActions([
                EditAction::make()->label('ویرایش'),
                DeleteAction::make()->label('حذف'),
            ]);
    }
}
