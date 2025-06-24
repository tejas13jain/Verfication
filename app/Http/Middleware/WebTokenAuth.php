<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Sanctum\PersonalAccessToken;

class WebTokenAuth
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken() ?? $request->query('token');

        if (!$token) {
            return redirect('/login')->with('error', 'Access denied. Token missing.');
        }

        $accessToken = PersonalAccessToken::findToken($token);

        if (!$accessToken) {
            return redirect('/login')->with('error', 'Invalid token.');
        }

        auth()->setUser($accessToken->tokenable);

        return $next($request);
    }
}
