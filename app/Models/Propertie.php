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

    public function specifications()
    {
        return $this->hasMany(Specifications::class, 'propety_id', 'id');
    }

    public function media()
    {
        return $this->hasOne(Media::class, 'property_id', 'id');
    }

    public function floorplans()
    {
        return $this->hasMany(Floorplans::class, 'propertie_id', 'id');
    }

    public function gallery()
    {
        return $this->hasMany(GalleryImages::class, 'property_id', 'id');
    }

    // amentie la lis

    public function amenties()
    {
        return $this->hasMany(Propertyamentie::class, 'property_id', 'id');
    }

}
