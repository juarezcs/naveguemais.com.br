<?php

namespace App\Models\Advertiser\AdvertiserAuth;

use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'account_type', 'cpf_cnpf', 'company_name', 'economicactivity_id', 'landline_phone', 'mobile_phone', 'zip_code', 'address', 'number', 'city', 'neighborhood', 'state_id', 'accepted_terms'
    ];
}
