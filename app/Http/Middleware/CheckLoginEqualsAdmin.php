<?php

namespace App\Http\Middleware;

use Closure;

class CheckLoginEqualsAdmin
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
       if ( !auth()->check() ){
            return redirect()->route('/auth/login');
        } else if (\Auth::user()->idTipoUsuario <> 1){
            return redirect('/home');
        } else {
            return $next($request);
        }
    }
}
