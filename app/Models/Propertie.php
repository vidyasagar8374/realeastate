<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propertie extends Model
{
    protected $table = 'properties';

    protected $fillable = [
        'title', 'subtitle', 'name', 'country', 'state', 'district', 'city', 'local_city',
        'facing', 'bathrooms', 'bedrooms', 'start_sqft', 'end_sqft', 'start_price', 'end_price',
        'no_floors', 'parking', 'estimated_emi'
    ];

}
