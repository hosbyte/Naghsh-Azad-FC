<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    protected $fillable = [
        'id' , 'title' , 'description' , 'age_group' ,
        'user_id' , 'is_featured'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
