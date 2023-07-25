<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomRegisterController extends Controller
{
    
    public function registerFormShow(){
        return view('custom-auth.register');
    }

    public function registerUser(RegisterStoreRequest $request){
     
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password)
        ]);


        $credentials=[
            'email' =>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'email'=>'Wrong creadential found'
        ])->onlyInput('email');
    }
}
