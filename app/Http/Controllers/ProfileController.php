<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;



class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    
    public function show($name)
    {   
        $user = Auth::user()->where('name',$name)->firstOrFail();

        return view('profile.show',compact('user'));
       
    }

    public function edit($name)
    {   
       $user = Auth::user()->where('name',$name)->firstOrFail();
    	
       return view('profile.edit', compact('user'));
    }

    public function update(UpdateProfile $request,$name)
    {  

        
        $profile = Auth::user()->where('name',$name)->firstOrFail()->profile();

         if ($profile->exists()) 
         {
              $profile->where('user_name',Auth::user()->name)->update($request->fullValid());
              
         }else
         {
            $profile->create($request->fullValid());
            
         }
          
         return redirect()->route('profile.show',array('name' => Auth::user()->name));

    }
}


