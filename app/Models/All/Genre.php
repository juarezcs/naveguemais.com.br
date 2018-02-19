<?php

namespace App\Models\All;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'genre', 'description'
    ];
}
