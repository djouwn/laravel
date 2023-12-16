<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo;

    public function __construct()
    {
        $this->middleware('guest');
     // Default redirection route
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => [ 'array'], // Ensure the role field is present and an array
            'role.*' => ['string', 'in:seller,client'], // Validate each role value to be 'seller' or 'client'
        ]);
    }

    protected function create(array $data)
    {
        $role = isset($data['role']) && in_array('seller', $data['role']) ? 'seller' : 'client';

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->role = $role;
        $user->save();

        // Set the redirection route based on user role
        if ($role === 'seller') {
            $this->redirectTo = RouteServiceProvider::HOME_SELLER;
        } elseif ($role === 'client') {
            $this->redirectTo = RouteServiceProvider::HOME_CLIENT;
        }elseif ($role === 'admin') {
            $this->redirectTo = RouteServiceProvider::HOME_ADMIN;
        }

        return $user;
    }
}