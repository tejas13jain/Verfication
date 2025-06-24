<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Laravel\Sanctum\PersonalAccessToken;

class TokenAuth
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken() ?? $request->cookie('token') ?? request()->header('Authorization');

        if ($token) {
            $accessToken = PersonalAccessToken::findToken($token);
            if ($accessToken && $accessToken->tokenable) {
                auth()->login($accessToken->tokenable);
                return $next($request);
            }
        }

        return redirect('/login')->with('error', 'Unauthorized access.');
    }
}
