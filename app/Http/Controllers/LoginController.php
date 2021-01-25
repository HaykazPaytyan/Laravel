<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreLogin;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function store(StoreLogin $request)
    {
       $validated = $request->validated();

       if (Auth::attempt($validated) == flase) {
          	 
          	  return redirect()->route('auth.index');
          } 

          return redirect()->route('profile.show',array('name' => $validated['name']));  
    }


    public function logout()
    {
    	Auth::logout();

    	return redirect()->route('home.index');
    }
}
