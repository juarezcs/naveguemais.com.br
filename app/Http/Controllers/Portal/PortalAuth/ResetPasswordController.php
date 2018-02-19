<?php

namespace App\Http\Controllers\Portal\PortalAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\ResetsPasswords;

//Auth Facade
use Illuminate\Support\Facades\Auth;

//Password Broker Facade
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    //User redirect path
    protected $redirectTo = '/';
    
    //trait for handling reset Password
    use ResetsPasswords;
    
    //Show form to seller where they can reset password
    public function showResetForm(Request $request, $token = null)
    {
        return view('portal.portalAuth.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    
    //returns Password broker of seller
    public function broker()
    {
        return Password::broker('users');
    }
    
    //returns authentication guard of seller
    protected function guard()
    {
        return Auth::guard('web');
    }
}
