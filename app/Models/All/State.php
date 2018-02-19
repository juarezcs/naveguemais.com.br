<?php

namespace App\Models\All;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'state', 'description'
    ];
}
