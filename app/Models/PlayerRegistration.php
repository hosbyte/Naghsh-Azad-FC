<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerRegistration extends Model
{
    protected $fillable = [
        'name' , 'family' , 'father_name' , 'father_phone' , 'mother_phone' ,
        'barth_date' , 'position' , 'foot' , 'status'
    ];
}
