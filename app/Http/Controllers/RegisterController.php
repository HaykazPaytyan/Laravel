<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreRegister;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(StoreRegister $request)
    {

       $validated = $request->validated();

       $user = User::create([
       	  'name' => $validated['register_name'],
       	  'email' => $validated['register_email'],
       	  'password' => $validated['register_pwd']
       ]);

       Auth::login($user);


       return redirect()->route('profile.show',['name' => Auth::user()->name]); 
        
    }
}
