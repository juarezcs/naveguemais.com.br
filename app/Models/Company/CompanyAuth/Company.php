<?php

namespace App\Models\Company\CompanyAuth;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'cnpf', 'name', 'economicactivity_id', 'landline_phone', 'mobile_phone', 'zip_code', 'address', 'number', 'city', 'neighborhood', 'state_id', 'site_unifi', 'active', 'accepted_terms'
    ];
}
