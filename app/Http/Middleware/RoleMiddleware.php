<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle($request, Closure $next, ...$roles)
    {
        $user = $request->user();

        foreach ($roles as $role) {
            if ($user->role === $role || $role === 'admin') {
                return $next($request);
            }
        }

        abort(403); // Unauthorized access if role doesn't match
    }
}