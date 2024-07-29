<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna terautentikasi dan is_admin adalah true
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirect jika bukan admin
        return redirect('/')->with('error', 'You do not have admin access.');
    }
}
