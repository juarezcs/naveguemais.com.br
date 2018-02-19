<?php

namespace App\Models\All;

use Illuminate\Database\Eloquent\Model;

class EconomicActivity extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'cnae', 'description'
    ];
}
