<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'academy_team_id',
        'national_id',
        'first_name',
        'last_name',
        'father_name',
        'birth_date',
        'position',
        'preferred_foot',
        'jersey_number',
        'father_phone',
        'mother_phone',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'birth_date' => 'date',
            'is_active' => 'boolean',
            'jersey_number' => 'integer',
        ];
    }

    public function academyTeam(): BelongsTo
    {
        return $this->belongsTo(AcademyTeam::class);
    }

    public function getPositionLabelAttribute(): string
    {
        return match ($this->position) {
            'goalkeeper' => 'دروازه‌بان',
            'defender' => 'مدافع',
            'midfielder' => 'هافبک',
            'winger' => 'وینگر',
            'forward' => 'مهاجم',
            default => '-',
        };
    }

    public function getPreferredFootLabelAttribute(): string
    {
        return match ($this->preferred_foot) {
            'right' => 'راست',
            'left' => 'چپ',
            'both' => 'هر دو',
            default => '-',
        };
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }
}
