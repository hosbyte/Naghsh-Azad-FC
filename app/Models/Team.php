<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * لیگ‌هایی که تیم در آن‌ها حضور دارد
    */
    public function leagues(): BelongsToMany
    {
        return $this->belongsToMany(League::class , 'league_team')
            ->withTimestamps();
    }

    /**
     * بازی‌هایی که تیم میزبان بوده
    */
    public function homeMatches(): HasMany
    {
        return $this->hasMany(LeagueMatch::class, 'home_team_id');
    }

    /**
     * بازی‌هایی که تیم مهمان بوده
    */
    public function awayMatches(): HasMany
    {
        return $this->hasMany(LeagueMatch::class, 'away_team_id');
    }
}
