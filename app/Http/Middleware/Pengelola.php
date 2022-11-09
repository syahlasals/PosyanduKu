<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pengelola
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        // role 1 = entry
        if(Auth::user()->role == 1){
            return redirect()->route('entry');
        }

        // role 2 = pengelola
        if(Auth::user()->role == 2){
            return $next($request);
        }

        // role 0 = default user/ortu
        // else
        // {
        //     return redirect()->route('ortu');
        // }
        if(Auth::user()->role == 0){
            return redirect()->route('ortu');
        }
    }
}
