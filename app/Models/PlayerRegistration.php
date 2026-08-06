<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class PlayerRegistration extends Model
{
    protected $fillable = [
        'name' , 'family' , 'father_name' , 'father_phone' , 'mother_phone' ,
        'birth_date' , 'position' , 'foot' , 'status'
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];

    // تبدیل تاریخ تولد به شمسی
    public function getBirthDateJalaliAttribute()
    {

        if (!$this->birth_date) {

            return '-';

        }


        return Jalalian::fromCarbon(
            \Carbon\Carbon::parse($this->birth_date)
        )
        ->format('Y/m/d');

    }

    // ترجمه پست مورد علاقه به فارسی
    public function getPositionLabelAttribute()
    {

        $positions = [

            'goalkeeper' => 'دروازه‌بان',

            'defender' => 'مدافع',

            'midfielder' => 'هافبک',

            'winger' => 'وینگر',

            'forward' => 'مهاجم',

        ];


        return $positions[$this->position] ?? $this->position;

    }

    //ترجمه پا تخصصی به فارسی
    public function getFootLabelAttribute()
    {

        $feet = [

            'right' => 'راست',

            'left' => 'چپ',

        ];


        return $feet[$this->foot] ?? $this->foot;

    }

    // ترجمه وضعیت به فارسی
    public function getStatusLabelAttribute()
    {

        $statuses = [

            'new' => 'جدید',

            'called' => 'تماس گرفته شد',

            'scheduled' => 'زمان تست مشخص شد',

            'accepted' => 'پذیرفته شد',

            'rejected' => 'رد شد',

        ];


        return $statuses[$this->status] ?? $this->status;

    }
}
