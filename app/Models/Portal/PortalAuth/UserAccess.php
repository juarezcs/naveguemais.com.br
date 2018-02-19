<?php

namespace App\Models\Portal\PortalAuth;

use Illuminate\Database\Eloquent\Model;

class UserAccess extends Model
{
    //Mass assignable attributes
    protected $fillable = [
      'user_id', 'ipAddress', 'user_mac', 'ap_mac', 'ssid', 'company_id', 'device', 'Longitude', 'Latitude', 'region'
    ];
}
