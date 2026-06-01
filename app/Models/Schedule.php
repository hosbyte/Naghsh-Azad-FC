<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'id' , 'title' , 'date' , 'start_time' ,
        'end_time' , 'location' , 'description' , 'timestamps'
    ];
}
