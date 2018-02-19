<?php

namespace App\Http\Middleware\AdvertiserPanel\AdvertiserAuth;

use Closure;

//Auth Facade
use Auth;

class AuthenticateAdvertiser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //If request does not comes from logged in seller
        //then he shall be redirected to Advertiser Login page
        if (! Auth::guard('web_advertiser')->check()) {
           return redirect('/anunciantes/login');
        }
        
        return $next($request);
    }
}
