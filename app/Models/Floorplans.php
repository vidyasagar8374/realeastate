<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Floorplans extends Model
{
    protected $table = 'floorplans'; 
    protected $fillable = ['title', 'subtitle', 'price', 'imagepath'];
}
