<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function roomBookings()
    {
        return $this->hasMany(RoomBooking::class, 'booking_id', 'custom_id');
    }

    public function serviceBookings()
    {
        return $this->hasMany(ServiceBooking::class, 'booking_id', 'custom_id');
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function company()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
