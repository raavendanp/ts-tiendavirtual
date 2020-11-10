<?php

namespace App\Http\Middleware;

use Closure;
use Illumitate\Support\Facades\Auth;

class EsAdmin
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
        //falta la clase iluminate
        $user=Auth::user();
        if(!$user->esAdmin()){
            redirect('/home');            
        }
        return $next($request);
    }
}
