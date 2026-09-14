<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

class League extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
    *  تیم‌های این لیگ
    */
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class, 'league_team')
            ->withTimestamps();
    }

    /**
    *   بازی‌های این لیگ
    */
    public function matches(): HasMany
    {
        return $this->hasMany(LeagueMatch::class);
    }
}
