<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class GalleryImage extends Model
{
    protected $fillable = [
        'gallery_album_id',
        'image_path',
    ];

    public function album()
    {
        return $this->belongsTo(GalleryAlbum::class);
    }


    protected static function booted(): void
    {
        static::deleting(function ($image) {
            if ($image->image_path && Storage::disk('public')->exists($image->image_path))
            {
                Storage::disk('public')->delete($image->image_path);
            }
        });

    }
}
