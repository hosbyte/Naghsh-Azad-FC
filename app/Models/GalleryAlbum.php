<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Morilog\Jalali\Jalalian;

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

    public function getCreatedAtJalaliAttribute()
    {
        if(!$this->created_at)
        {
            return '-';
        }

        return Jalalian::fromCarbon(
            $this->created_at
        )->format('Y/m/d');
    }
}
