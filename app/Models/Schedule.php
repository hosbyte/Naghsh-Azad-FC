<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

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

    public function getEventTypeLabelAttribute()
    {
        $events = [
            'training' => 'تمرین',
            'match' => 'مسابقه',
            'camp' => 'اردو',
            'meeting' => 'جلسه',
            'test' => 'تست',
            'other' => 'سایر',
        ];

        return $events[$this->event_type] ?? $this->event_type;
    }

    public function getStatusLabelAttribute()
    {
        $status = [
            'confirmed' => 'تایید شده',
            'pending' => 'در انتظار تایید',
            'cancelled' => 'لغو شده',
        ];
        return $status[$this->status] ?? $this->status;
    }

    public function getJalaliDateAttribute()
    {
        return Jalalian::fromDateTime($this->date)
            ->format('Y/m/d');
    }
}
