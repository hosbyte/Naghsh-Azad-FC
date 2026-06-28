<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'id' , ' title' , 'slug' , 'content' , 
        'image_path' , 'user_id' , 'is_published'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
