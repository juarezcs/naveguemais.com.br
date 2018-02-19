<?php

namespace App\Http\Controllers\Portal\PortalAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Trait
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    //Sends Password Reset emails
    use SendsPasswordResetEmails;
    
    //Shows form to request password reset
    public function showLinkRequestForm()
    {
        return view('portal.portalAuth.email');
    }
    
    //Password Broker for Seller Model
    public function broker()
    {
         return Password::broker('users');
    }
    
}
