<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    protected $fillable = ['value', 'key', 'property_id'];

    public function property()
    {
        return $this->belongsTo(Propertie::class, 'property_id', 'id');
    }
}
