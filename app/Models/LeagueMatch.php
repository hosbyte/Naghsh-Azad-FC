<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LeagueMatch extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'league_id',
        'home_team_id',
        'away_team_id',
        'home_score',
        'away_score',
    ];

    protected $casts = [
        'home_score' => 'integer',
        'away_score' => 'integer',
    ];

    /**
     * لیگ مربوط به بازی
    */

    public function league(): BelongsTo
    {
        return $this->belongsTo(League::class);
    }

    /**
     * تیم میزبان
    */
    public function homeTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    /**
     * تیم مهمان
    */
    public function awayTeam(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
}
