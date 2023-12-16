<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifiez si l'utilisateur est authentifié et a le rôle d'administrateur
        if (Auth::check() && Auth::user()->role === 'seller') {
            return $next($request);
        }

        // Rediriger l'utilisateur s'il n'est pas un administrateur
        return redirect('')->with("error", "Vous n'avez pas l'autorisation d'accéder à cette page.");
    }
}
