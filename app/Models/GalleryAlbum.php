<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryAlbum extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover_image',
    ];

    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }

    protected static function booted(): void
    {
        static::deleting(function ($album) {
             //حذف کاور
            if($album->cover_image && Storage::disk('public')->exists($album->cover_image))
            {
                Storage::disk('public')->delete($album->cover_image);
            }

            foreach($album->images as $image)
            {
                $image->delete();
            }
        });
    }
}
