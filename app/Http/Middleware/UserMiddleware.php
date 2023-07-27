<?php

namespace App\Http\Middleware;

use Closure;
// use Auth;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    private $user;
    public function __construct()
    {
    }

    public function handle($request, Closure $next, $guard = 'web'): Response
    {
        if (Auth::guard($guard)->check()) {
            return $next($request);
        }
        return redirect()->route('home')->with('error', 'Bạn cần đăng nhập');
    }
}