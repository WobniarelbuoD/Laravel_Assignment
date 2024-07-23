<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnvTokenAuth
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header('Authorization');
        $envToken = env('API_TOKEN');

        if ($token && hash_equals($envToken, $token)) {
            return $next($request);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}