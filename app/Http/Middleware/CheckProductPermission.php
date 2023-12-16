<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ProductController;

class CheckProductPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user has the "admin" or "seller" role
        if (!auth()->check() || !(auth()->user()->role === 'admin' || auth()->user()->role === 'seller')) {
            return redirect('some-route')->with('error', 'Unauthorized access');
        }
        
        return $next($request);
        
    }
}