<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomRegisterController extends Controller
{
    
    public function registerFormShow(){
        return view('custom-auth.register');
    }

    public function registerUser(Request $request){
        dd($request->all());
    }
}
