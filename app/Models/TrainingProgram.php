<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    protected $fillable = [
        'id' , 'title' , 'description' , 'age_group' ,
        'user_id' , 'is_featured' , 'media_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'age_group' => 'array',
    ];

    protected function mediaType() : Attribute
    {
        return Attribute::make(
            get: function ()
            {
                $extension = strtolower(pathinfo($this->media_path , PATHINFO_EXTENSION));

                return in_array($extension , [
                'mp4',
                'mov',
                'avi',
                'mkv',
                'webm',
                'wmv',
                'flv',
                ]) ? 'video' : 'image';
            }
        );
    }
}
