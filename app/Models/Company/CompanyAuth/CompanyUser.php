<?php

namespace App\Models\Company\CompanyAuth;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'advertiser_id', 'name', 'email', 'password'
    ];

    //hidden attributes
    protected $hidden = [
       'password', 'remember_token',
    ];
}
