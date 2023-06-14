<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Http;
use Laravel\Sanctum\PersonalAccessToken;

class Authenticate extends Middleware
{

    public function handle($request, Closure $next, ...$guards)
    {
        if (isset($_COOKIE['token'])) {

            if ($_COOKIE['token'] != "") {
                return $next($request);
            }
        }

        return redirect()->route('login')->withoutCookie(cookie('token'));
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}
