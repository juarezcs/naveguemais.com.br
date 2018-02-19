<?php

namespace App\Models\All;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'year', 'description'
    ];
}
