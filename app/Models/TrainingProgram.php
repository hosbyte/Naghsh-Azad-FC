<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    protected $fillable = [
        'id' , 'title' , 'description' , 'age_group' ,
        'user_id' , 'is_featured' , 'media_path' , 'benefits'
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

    public function getMediaTypeAttribute()
    {
        if (!$this->media_path) {
            return null;
        }

        $extension = pathinfo($this->media_path, PATHINFO_EXTENSION);

        return in_array($extension, ['mp4','mov','avi','webm'])
            ? 'video'
            : 'image';
    }

    public function getAgeGroupLabelAttribute()
    {
        $labels = [
            'kids' => 'نونهالان',
            'teenagers' => 'نوجوانان',
            'youth' => 'جوانان',
        ];

        return collect($this->age_group ?? [])
        ->map(function ($item) use ($labels) {
            return $labels[$item] ?? $item;
        })
        ->implode('، ');
    }
}