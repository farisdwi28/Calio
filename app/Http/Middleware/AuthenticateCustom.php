<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateCustom
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); // Redirect to the login page if not authenticated
        }

        return $next($request);
    }
}
