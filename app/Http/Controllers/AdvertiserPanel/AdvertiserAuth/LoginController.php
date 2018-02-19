<?php

namespace App\Http\Controllers\AdvertiserPanel\AdvertiserAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Class needed for login and Logout logic
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\All\EconomicActivity;
use App\Models\All\State;

//Auth facade
use Auth;

class LoginController extends Controller
{
    //Where to redirect seller after login.
    protected $redirectTo = 'anunciantes/panelHome';
    
    //Trait
    use AuthenticatesUsers;
    
    //Custom guard for seller
    protected function guard()
    {
      return Auth::guard('web_advertiser');
    }
    
    //Shows seller login form
    public function showLoginForm(EconomicActivity $economicActivity, State $state)
    {
       $economic_activities = $economicActivity->All();
       $states = $state->All();
       return view('advertiserPanel.advertiserAuth.register', compact('economic_activities', 'states'));
    }
    
    
}
