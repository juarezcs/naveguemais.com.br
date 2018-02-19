<?php

namespace App\Http\Middleware\Portal\PortalAuth;

use Closure;

//Auth Facade
use Auth;

class RedirectIfUserAuthenticated
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
        //Se o pedido vier do usuário conectado, ele irá
        //ser redirecionado para a página inicial.
        if (Auth::guard()->check()) {
          return redirect('/login');
        }
        
        //Se o pedido vier do usuário conectado, ele irá
        //ser redirecionado para a página inicial do usuário.
        if (Auth::guard('web')->check()) {
          return redirect('/');
        }
        
        return $next($request);
    }
}
