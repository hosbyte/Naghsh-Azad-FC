<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerRegistration extends Model
{
    protected $fillable = [
        'name' , 'family' , 'father_name' , 'father_phone' , 'mother_phone' ,
        'birth_date' , 'position' , 'foot' , 'status'
    ];

    protected $casts = [
        'birth_date' => 'date',
    ];
}
