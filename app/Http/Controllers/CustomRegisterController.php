<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
    }
}
