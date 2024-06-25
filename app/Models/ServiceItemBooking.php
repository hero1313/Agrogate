<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItemBooking extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(ServiceItem::class, 'service_item_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
