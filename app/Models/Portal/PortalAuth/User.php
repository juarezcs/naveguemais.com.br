<?php

namespace App\Models\Portal\PortalAuth;

//use Illuminate\Database\Eloquent\Model;

//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

//Trait for sending notifications in laravel
use Illuminate\Notifications\Notifiable;

//Notification for Seller
use App\Notifications\Portal\PortalAuth\UserResetPasswordNotification;

class User extends Model
{
    // This trait has notify() method defined
    use Notifiable;
    
    //Mass assignable attributes
    protected $fillable = [
      'name', 'email', 'year_id', 'genre_id', 'password'
    ];

    //hidden attributes
    protected $hidden = [
       'password', 'remember_token',
    ];
    
    //Send password reset notification
    public function sendPasswordResetNotification($token)
    {
      $this->notify(new UserResetPasswordNotification($token));
    }
}
