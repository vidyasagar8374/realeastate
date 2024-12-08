<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenties extends Model

{
    protected $table = 'amenties'; 
    protected $fillable = ['name', 'icon'];
}
