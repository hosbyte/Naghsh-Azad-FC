<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = [
        'id' , 'title' , 'slug' , 'content' , 
        'image_path' , 'user_id' , 'is_published','is_featured'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted(): void
    {
        static::deleting(function ($news){
            if($news->image_path && Storage::disk('public')->exists($news->image_path))
            {
                Storage::disk('public')->delete($news->image_path);
            }
        });
    }
}
