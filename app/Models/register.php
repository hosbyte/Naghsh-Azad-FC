<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'name' , 'family' , 'fname' , 'fnumber' , 'mnumber' ,
        'date' , 'position' , 'foot'
    ];
}
