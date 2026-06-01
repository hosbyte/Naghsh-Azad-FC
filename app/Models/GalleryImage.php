<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'id' , 'title' , 'image_path' , 'category'
    ];
}
