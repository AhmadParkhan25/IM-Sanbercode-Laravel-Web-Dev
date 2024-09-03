<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $firstName = $request->input('fName');
        $lastName = $request->input('lName');

        return view('welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
