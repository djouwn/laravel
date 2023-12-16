<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
  
    public function contact(){
        return view('contact');
    }
    public function SubmitContactForm(Request $request){
        // Validate the form data
        $validateData=$request->validate(
        [
            'Name' => 'required',
            'Email' => 'required',
            'Message' => 'required',
        ]
        );
        return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succés' );
    }
    public function register(){
        return view('pages.register');
    }
}