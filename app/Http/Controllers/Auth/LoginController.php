<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Annotation\Route;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.home');
        } elseif ($user->role === 'seller') {
            return redirect()->route('seller.home');
        } elseif ($user->role === 'client') {
            return redirect()->route('client.home');
        } else {
            // Handle unauthorized access or unknown roles
            abort(403);
        }
    }
}