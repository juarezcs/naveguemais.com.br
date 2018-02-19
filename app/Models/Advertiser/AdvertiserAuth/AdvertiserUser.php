<?php

namespace App\Models\Advertiser\AdvertiserAuth;

//use Illuminate\Database\Eloquent\Model;

//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;

//Notification for Seller
use App\Notifications\AdvertiserPanel\AdvertiserAuth\AdvertiserUserResetPasswordNotification;

class AdvertiserUser extends Authenticatable
{
    // This trait has notify() method defined
    use Notifiable;
    
    //Mass assignable attributes
    protected $fillable = [
      'advertiser_id', 'name', 'email', 'password'
    ];

    //hidden attributes
    protected $hidden = [
       'password', 'remember_token',
    ];
    
    //Send password reset notification
    public function sendPasswordResetNotification($token)
    {
      $this->notify(new AdvertiserUserResetPasswordNotification($token));
    }
}