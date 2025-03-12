<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
<<<<<<< HEAD
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Yetkisiz erişim.');
=======
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect('/')->with('error', 'Yetkiniz yok!');
        }
        return $next($request);
>>>>>>> ebdd14dd0df13b17903282d08fe643024913eb32
    }
}
