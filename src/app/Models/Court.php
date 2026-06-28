<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    protected $fillable = [
    'name',
    'location',
    'description',
    'price_per_hour',
    'is_active',
    'image',
];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
