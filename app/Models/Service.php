<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hotel_id',
        'name_ge',
        'name_en',
        'description_ge',
        'description_en',
        'price',
    ];


    public function serviceBookings()
    {
        return $this->hasMany(ServiceBooking::class);
    }
}
