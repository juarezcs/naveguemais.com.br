<?php

namespace App\Http\Middleware\Portal\PortalAuth;

use Closure;

//Auth Facade
use Auth;

class AuthenticateUser
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
        //Se o pedido não vier do usuário conectado
        //então ele será redirecionado para a página de Login do usuário
        if (! Auth::guard('web')->check()) {
           return redirect('/login');
        }
        
        return $next($request);
    }
}
