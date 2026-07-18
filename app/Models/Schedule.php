<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'id' , 'title' ,'event_type' ,'status' , 'age_group' , 'date' , 'start_time' ,
        'end_time' , 'location' , 'description' , 'timestamps'
    ];

    protected $casts = [
        'age_group' => 'array',
    ];

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
