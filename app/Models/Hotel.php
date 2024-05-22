<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_ge',
        'name_en',
        'description_ge',
        'description_en',
        'seo_title',
        'seo_description',
        'address_ge',
        'address_en',
        'google_map',
        'city_ge',
        'city_en',
        'food',
        'check_in',
        'check_out',
        'conditioner',
        'internet',
        'kitchen',
        'pool',
        'sauna',
        'porch',
        'Protection',
    ];
}
