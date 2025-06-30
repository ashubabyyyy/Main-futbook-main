<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'venue_id',
        'type',
        'surface_type',
        'capacity',
        'hourly_rate',
        'features',
        'images',
        'status',
        'availability_schedule'
    ];

    protected $casts = [
        'features' => 'array',
        'images' => 'array',
        'availability_schedule' => 'array',
        'hourly_rate' => 'decimal:2'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class); // ✅ Corrected
    }

    public function getAverageRatingAttribute()
    {
        return $this->reviews()->avg('rating') ?? 0;
    }

    public function getReviewVenueAttribute()
    {
        return $this->reviews()->count();
    }

    public function isAvailable($date, $startTime, $endTime)
    {
        return !$this->bookings()
            ->whereDate('booking_date', $date)
            ->where('status', '!=', 'cancelled')
            ->where(function($query) use ($startTime, $endTime) {
                $query->whereBetween('start_time', [$startTime, $endTime])
                      ->orWhereBetween('end_time', [$startTime, $endTime])
                      ->orWhere(function($q) use ($startTime, $endTime) {
                          $q->where('start_time', '<=', $startTime)
                            ->where('end_time', '>=', $endTime);
                      });
            })
            ->exists();
    }
}
