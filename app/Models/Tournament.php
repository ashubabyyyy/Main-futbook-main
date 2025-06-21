<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'type',
        'start_date',
        'end_date',
        'registration_start',
        'registration_end',
        'max_teams',
        'entry_fee',
        'prize_pool',
        'rules',
        'venue_id',
        'status',
        'image',
        'age_category',
        'skill_level'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'registration_start' => 'datetime',
        'registration_end' => 'datetime',
        'entry_fee' => 'decimal:2',
        'prize_pool' => 'decimal:2',
        'rules' => 'array'
    ];

    const STATUS_DRAFT = 'draft';
    const STATUS_OPEN = 'open';
    const STATUS_FULL = 'full';
    const STATUS_ONGOING = 'ongoing';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELLED = 'cancelled';

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'tournament_registrations')
                    ->withPivot('registration_date', 'status', 'payment_status')
                    ->withTimestamps();
    }

    public function matches()
    {
        return $this->hasMany(TournamentMatch::class);
    }

    public function getRegisteredTeamsCountAttribute()
    {
        return $this->teams()->count();
    }

    public function getAvailableSpotsAttribute()
    {
        return $this->max_teams - $this->registered_teams_count;
    }

    public function isRegistrationOpen()
    {
        return $this->status === self::STATUS_OPEN &&
               now()->between($this->registration_start, $this->registration_end) &&
               $this->available_spots > 0;
    }
}