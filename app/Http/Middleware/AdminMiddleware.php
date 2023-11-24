<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()){
            if (Auth::user()->role == '1'){
                return $next($request);
            }else{
                return redirect('/')->with('message','Access Denied as you are not admin');
            }

        }else{
            return redirect('/')->with('message', 'Login to access website');
        }

        return $next($request);
    }
}